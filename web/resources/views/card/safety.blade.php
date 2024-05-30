@extends('welcome')
@section('content')

<style>
/* Container for both boxes */
.f {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    border-radius: 8px;
}

.sensors-date{
    display: flex;
    gap: 3rem;    
}

/* Box containing sensor status */
.sensors {
    flex: 1;
    padding: 1rem;
    border-radius: 8px;
    background-color: #D9D9D9;
    width: 30rem;
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
        <h1>Zabezpecenie</h1>
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
                        <p>Objekt 3</p> 
                    </div>
                    <div>
                        <p><span class="green">·</span> Aktivny</p>
                        <p><span class="green">·</span> Aktivny</p>
                        <p><span class="green">·</span> Aktivny</p>
                    </div>
    
                </div>
                
                
            </div>
            <div class="time">
                <h2>Security 1</h2>
                @if ($security1)
                    @if ($security1->motion == 1)
                        <p>Pohyb bol zaznameny v case: {{ $security1->motion_time }}</p>
                    @else
                        <p>Pohyb nebol zaznameny</p>
                    @endif
                @else
                    <p>No data available</p>
                @endif
            
                <h2>Security 2</h2>
                @if ($security2)
                    @if ($security2->motion == 1)
                        <p>Pohyb bol zaznameny v case: {{ $security2->motion_time }}</p>
                    @else
                        <p>Pohyb nebol zaznameny</p>
                    @endif
                @else
                    <p>No data available</p>
                @endif
            
                <h2>Security 3</h2>
                @if ($security3)
                    @if ($security3->motion == 1)
                        <p>Pohyb bol zaznameny v case: {{ $security3->motion_time }}</p>
                    @else
                        <p>Pohyb nebol zaznameny</p>
                    @endif
                @else
                    <p>No data available</p>
                @endif
            </div>
        </div>
    </div>
    
    {{-- <div class="button-container">
        <button onclick="refreshPage()" class="button">Obnoviť</button>
    </div> --}}

</div>
<script>
    function refreshPage() {
        location.reload();
    }

</script>


@endsection