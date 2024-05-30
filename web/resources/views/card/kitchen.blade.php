@extends('welcome')
@section('content')


<div class="dashboard">
    <div class="headers">
        <h1>Kuchyňa</h1>
    </div>
    
    <div class="f">
        <a href="#">
            <div class="card">
                <h2>CO2</h2>
                <h3>100pm</h3>
                <img src="images/SVGRepo_iconCarrier (1).svg">
            </div>
        </a>
        <a href="#">
            <div class="card">
                <h2>LPG</h2>
                <h3>100pm</h3>
                <img src="images/Group.svg">
            </div>
        </a>
        <a href="#">
            <div class="card">
                <h2>Teplota</h2>
                <h3>100pm</h3>
                <img src="images/Group (1).svg">
            </div>
        </a>
        <a href="#">
            <div class="card">
                <h2>Vlhkosť</h2>
                <h3>100pm</h3>
                <img src="images/SVGRepo_iconCarrier.svg">
            </div>
        </a>
    </div>
</div>



@endsection