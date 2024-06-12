@extends('welcome')
@section('content')

<style>
/* Container for both boxes */
.f {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    border-radius: 8px;
    max-width: 100%;
}

.sensors-date{
    display: flex;
    flex-direction: row;
    gap: 3rem;    
}

/* Box containing sensor status */
.sensors {
    flex: 1;
    padding: 1rem;
    border-radius: 8px;
    background-color: #D9D9D9;
    width: 30rem;
    max-width: 100%;
}

.sensors-header {
    display: flex;
    justify-content: space-around;
    margin-bottom: 1rem;
}

.sensors-header p {
    font-weight: bold;
    font-size: 1.25rem;
}

.sensors-body {
    display: flex;
    justify-content: space-around;
}

.sensors-body div p .green{
    font-weight: 900;
    color: #07c807;
}

.sensors-body div p .red{
    font-weight: 900;
    color: #ff0000;
}

/* Box containing time information */
.time {
    flex: 1;
    padding: 10px;
    border-radius: 8px;
    background-color: #D9D9D9;
}

/* Styling for paragraphs inside sensors and time boxes */
.sensors p,
.time p {
    margin: 5px 0;
    color: #333;
}

/* Styling for headings inside time box */
.time h2 {
    margin-top: 0;
    font-size: 1.5em;
    color: #333;
}

/* Additional padding for the time section */
.time {
    padding: 10px 20px;
}
</style>

<div class="dashboard">
    <div class="headers">
        <h1>Zabezpečenie</h1>
    </div>
    
    <div class="f">
        <div class="sensors-date">
            <div class="sensors">
                <div class="sensors-header">
                    <p>Senzor</p>
                    <p>Status</p>
                </div>
                <div class="sensors-body">
                    <div>
                        <p>Objekt 1</p>
                        <p>Objekt 2</p>
                    </div>
                    <div>
                        <p id="objekt1-status"><span class="green">·</span> Aktívny</p>
                        <p id="objekt2-status"><span class="green">·</span> Aktívny</p>
                    </div>
                </div>
            </div>
            <div class="time" id="time-data">
                <h2>Security 1</h2>
                <p id="security1-status">Loading...</p>
            
                <h2>Security 2</h2>
                <p id="security2-status">Loading...</p>
            
            </div>
        </div>
    </div>
</div>

<script>
    function fetchData() {
        fetch('/api/bezpecnost')
            .then(response => response.json())
            .then(data => {
                console.log('loaded');
                console.log(data);
                document.getElementById('objekt1-status').innerHTML = data.objekt1;
                document.getElementById('objekt2-status').innerHTML = data.objekt2;

                document.getElementById('security1-status').innerHTML = data.security1;
                document.getElementById('security2-status').innerHTML = data.security2;
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    setInterval(fetchData, 5000);

    document.addEventListener('DOMContentLoaded', fetchData);
</script>

@endsection
