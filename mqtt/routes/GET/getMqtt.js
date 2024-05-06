const getMqtt = require("express").Router();
const mqtt = require('mqtt');
const pool = require("../../database/mysql_connect");

getMqtt.get('/mqtt', async (req, res) => {
    const {
        MQTT_PROTOCOL,
        MQTT_PROTOCOL_VERSION,
        MQTT_HOST,
        MQTT_PORT,
        MQTT_USERNAME,
        MQTT_PASSWORD,
        MQTT_CLIENT_ID,
        MQTT_CA_PATH,
        MQTT_REJECT_UNAUTHORIZED,
        MQTT_LWT_TOPIC,
        MQTT_LWT_PAYLOAD,
        MQTT_LWT_QOS,
        MQTT_LWT_RETAIN
    } = process.env;

    const options = {
        protocol: MQTT_PROTOCOL,
        protocolVersion: parseInt(MQTT_PROTOCOL_VERSION),
        host: MQTT_HOST,
        port: parseInt(MQTT_PORT),
        username: MQTT_USERNAME,
        password: MQTT_PASSWORD,
        clientId: MQTT_CLIENT_ID,
        ca: [MQTT_CA_PATH],
        rejectUnauthorized: MQTT_REJECT_UNAUTHORIZED === 'true',
        will: {
            topic: MQTT_LWT_TOPIC,
            payload: MQTT_LWT_PAYLOAD,
            qos: parseInt(MQTT_LWT_QOS),
            retain: MQTT_LWT_RETAIN === 'true'
        }
    };

    const client = mqtt.connect(options);
    const { topic, wfr, message } = req.query;
    const waitTime = parseInt(wfr) * 1000;
    const room = 'res/' + topic;

    let timeoutId;
    let communicationSuccess = false; 
    let responseSent = false; 
    let connecting = true;

    // Use pool.query instead of conn.query
    try {
        await pool.query(beepupdate);
    } catch (updateErr) {
        console.error('Chyba při aktualizaci constatus:', updateErr);
        res.status(500).json({ error: 'Chyba pri aktualizacii hodnoty constatus' });
        return;
    }

    client.on("connect", () => {
        console.log("pripojene na mqtt");
        client.subscribe(room, (err) => {
            if (err) {
                console.error('Chyba pri pripojovaní k MQTT topicu:', err);
                if (!responseSent) {
                    res.status(500).json({ error: 'Chyba pri pripojovaní k MQTT topicu' });
                    responseSent = true;
                }
                client.end();
            } else {
                client.publish(topic, message);
                console.log(room);
                timeoutId = setTimeout(() => {
                    if (!communicationSuccess) {
                        console.error('cas uplynul.');
                        if (!responseSent) {
                            res.json({ message: 'Vypršal čas' });
                            responseSent = true;
                        }
                        client.end(); 
                    }
                }, waitTime);
            }
        });
    });

    client.on("message", async (rectopic, message) => {
        if (responseSent) {
            return;
        }
        // Use pool.query instead of conn.query
        try {
            communicationSuccess = true;
            res.json({ success: true, message: message.toString() });
        } catch (updateErr) {
            console.error('Chyba pri aktualizaci constatus:', updateErr);
            if (!responseSent) {
                res.status(500).json({ error: 'Chyba pri aktualizacii hodnoty constatus' });
                responseSent = true;
            }
        } finally {
            client.end();
            clearTimeout(timeoutId);
            connecting = false;
        }
    });

    client.on('error', (err) => {
        if (responseSent || !connecting) {
            return;
        }
        console.error('Chyba pri pripojovani k MQTT brokerovi:', err);
        res.status(500).json({ error: 'Chyba pri pripojovani k MQTT brokerovi' });

        if (connecting) {
            client.end();
            clearTimeout(timeoutId);
            connecting = false;
            responseSent = true;
        }
    });
});

module.exports = getMqtt;
