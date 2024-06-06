@extends('welcome')
@section('content')

<div class="dashboard">
    <div class="headers">
        <div>
            <img style="width: 200px; height:100px;" src="images/logo.svg" alt="">
        </div>
    </div>
    
    <div class="f">
        <a href="/bezpecnost">
            <div class="card">
                <h2>Bezpečnosť</h2>
                <img src="images/SVGRepo_iconCarrier (1).svg">
            </div>
        </a>

        <a href="/kuchyna">
            <div class="card">
                <h2>Kuchyňa</h2>
                <img src="images/Group.svg">
            </div>
        </a>
        
        <a href="/zamestnanci">
            <div class="card">
                <h2>Zamestnanci</h2>
                <img src="images/Group (1).svg">
            </div>
        </a>
        
        <a href="/pracovisko">
            <div class="card">
                <h2>Pracovisko</h2>
                <img src="images/SVGRepo_iconCarrier.svg">
            </div>
        </a>
    </div>
</div>


@endsection