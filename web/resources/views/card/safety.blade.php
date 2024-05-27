@extends('welcome')
@section('content')

<style>
/* Container for both boxes */
.f {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.sensors-date{
    display: flex
}

/* Box containing sensor status */
.sensors {
    flex: 1;
    margin-right: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #ffffff;
}

/* Box containing time information */
.time {
    flex: 2;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #ffffff;
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
                <p>Objekt 1: aktivny</p>
                <p>Objekt 2: aktivny</p>
                <p>Objekt 3: aktivny</p>
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