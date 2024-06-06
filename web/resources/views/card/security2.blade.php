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


    .data-item {
        display: flex;
        align-items: center;
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05);
    }

    .data-item img {
        width: 40px;
        height: 40px;
        margin: 0.5rem;
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
    @if ($security2)
    <div class="data-item">
        <img src="../images/motion.png" alt="Motion Icon">
        <p><span class="label">Motion:</span> {{ $security2->motion }}</p>
    </div>
    <div class="data-item">
        <img src="../images/svg_teplota.svg" alt="Temperature Icon">
        <p><span class="label">Temperature:</span> {{$security2->temperature_value}}°C</p>
    </div>
    <div class="data-item">
        <img src="../images/icons8-clock.svg" alt="Motion Time Icon">
        <p><span class="label">Motion Time:</span> {{ $security2->motion_time }}</p>
    </div>
    <div class="data-item">
        <img src="../images/svg_vlhkost.svg" alt="Humidity Icon">
        <p><span class="label">Humidity:</span> {{ $security2->humidity_value }}%</p>
    </div>
    @else
        <p class="no-data">No data available</p>
    @endif
    </div>
@endsection
