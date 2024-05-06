const express = require("express");
const PORT = process.env.PORT || 5001;
const app = express();
const cors = require("cors");
const getMqtt = require('./routes/GET/getMqtt');
// const postRestart = require('./routes/POST/postRestart');
// const getBeepInfo = require('./routes/GET/getBeepInfo');


/*
* MIDDLEWARE, povolenie prijímať json z frontendu
*/
app.use(express.json({extended:false}));

app.get("/", (request, response) => {
    response.send("running");
});

/*
*   GET ROUTES
*
*/
app.use(cors());
app.use("/", getMqtt);
// app.use("/", postRestart);
// app.use("/", getBeepInfo);


app.listen(PORT, () => {
    console.log(`Server running on ${PORT}`);
});
