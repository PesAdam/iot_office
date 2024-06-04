@extends('welcome')

@section('content')
<style>
    .data-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        border-radius: 12px;
        background-color: #f9f9f9;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .data-container h2 {
        font-size: 2em;
        color: #333;
        margin-bottom: 20px;
    }

    .data-container img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .data-item {
        display: flex;
        align-items: center;
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05);
    }

    .data-item img {
        width: 40px;
        height: 40px;
        margin-right: 20px;
    }

    .data-item p {
        margin: 0;
        font-size: 1.2em;
        color: #555;
    }

    .data-item .label {
        font-weight: bold;
        color: #333;
    }

    .no-data {
        text-align: center;
        font-size: 1.5em;
        color: #999;
        margin-top: 20px;
    }
</style>

<div class="data-container">
    <h2>Security Data</h2>
    {{-- <img src="https://via.placeholder.com/100" alt="Sensor Image"> --}}

    @if ($security1)
        {{-- <div class="data-item">
            <img src="https://via.placeholder.com/40" alt="ID Icon">
            <p><span class="label">ID:</span> {{ $security1->id }}</p>
        </div> --}}
        <div class="data-item">
            <img src="https://static.thenounproject.com/png/2931191-200.png" alt="Motion Icon">
            <p><span class="label">Motion:</span> {{ $security1->motion }}</p>
        </div>
        <div class="data-item">
            <img src="https://w7.pngwing.com/pngs/523/322/png-transparent-resistance-thermometer-computer-icons-temperature-fever-miscellaneous-measurement-degree-thumbnail.png" alt="Temperature Icon">
            <p><span class="label">Temperature:</span> {{$security1->temperature_value}}°C</p>
        </div>
        <div class="data-item">
            <img src="https://cdn-icons-png.flaticon.com/512/993/993076.png" alt="Motion Time Icon">
            <p><span class="label">Motion Time:</span> {{ $security1->motion_time }}</p>
        </div>
        <div class="data-item">
            <img src="https://w7.pngwing.com/pngs/161/398/png-transparent-humidity-rain-temperature-moisture-random-icons-text-cloud-area-thumbnail.png" alt="Humidity Icon">
            <p><span class="label">Humidity:</span> {{ $security1->humidity_value }}%</p>
        </div>
    @else
        <p class="no-data">No data available</p>
    @endif
</div>
@endsection
