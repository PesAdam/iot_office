@extends('welcome')
@section('content')


<div class="dashboard">
    <div class="headers">
        <h1>Pracovisko</h1>
    </div>   
    <div class="f">
        <div class="card">
            <a href="/pracovisko/objekt1"><h2>Objekt 1</h2></a>
        </div>
        
        <div class="card">
            <a href="/pracovisko/objekt2"><h2>Objekt 2</h2></a>
        </div>
        
      
        <div class="card">
            <a href="/pracovisko/objekt3"><h2>Objekt 3</h2></a>
        </div>
    </div>
</div>



@endsection