@extends('welcome')
@section('content')


<div class="dashboard">
    <div class="headers">
        <h1>Pracovisko</h1>
    </div>

    <?php
        $sum = 0;
        $count = 0;
        
        foreach ($tables as $table) {
            $sum += $table->temperature_value; 
            $count++; 
        }
        
        $average = $sum / $count;
    ?>

   
    <div class="f">
        <div class="card">
            <h2>CO2</h2>
            <h3>100pm</h3>
            <img src="images/SVGRepo_iconCarrier (1).svg">
        </div>
        
        <div class="card">
            <h2>LPG</h2>
            <h3>100pm</h3>
            <img src="images/Group.svg">
        </div>
        
        <div class="card">
            <h2>Teplota</h2>
            <h3>{{round($average)}} °C</h3>
            <img src="images/Group (1).svg">
        </div>
        
        <div class="card">
            <h2>Vlhkosť</h2>
            <h3>100pm</h3>
            <img src="images/SVGRepo_iconCarrier.svg">
        </div>
    </div>
</div>



@endsection