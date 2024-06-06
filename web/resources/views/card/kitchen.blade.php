@extends('welcome')
@section('content')


<div class="dashboard">
    <div class="headers">
        <h1>Kuchyňa</h1>
    </div>
    
    <div class="f">
        <a href="">
            <div class="card">
                <h2>CO2</h2>
                <h3>100pm</h3>
                <img src="images/svg_co2.svg">
            </div>
        </a>
        <a href="">
            <div class="card">
                <h2>LPG</h2>
                <h3>100pm</h3>
                <img src="images/svg_lpg.svg">
            </div>
        </a>
        <a href="">
            <div class="card">
                <h2>Teplota</h2>
                <h3>100pm</h3>
                <img src="images/svg_teplota.svg">
            </div>
        </a>
        <a href="">
            <div class="card">
                <h2>Vlhkosť</h2>
                <h3>100pm</h3>
                <img src="images/svg_vlhkost.svg">
            </div>
        </a>
    </div>
</div>



@endsection