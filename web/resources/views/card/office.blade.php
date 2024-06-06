@extends('welcome')
@section('content')
<style>
    /* CSS for the dashboard */
.dashboard {
    padding: 20px;
    border-radius: 8px;
    /* background-color: #f0f0f0; */
}

.headers {
    text-align: center;
    margin-bottom: 20px;
}

.headers h1 {
    font-size: 2em;
    color: #333;
}

/* Flex container for the cards */


</style>

<div class="dashboard">
    <div class="headers">
        <h1>Pracovisko</h1>
    </div>   
    <div class="f">
        <a href="/pracovisko/objekt1">
            <div class="card">
                <h2>Pracovisko 1</h2>
                <img src="images/SVGRepo_iconCarrier.svg" alt="">
            </div>
        </a>

        <a href="/pracovisko/objekt2">
            <div class="card">
                <h2>Pracovisko 2</h2>
                <img src="images/SVGRepo_iconCarrier.svg" alt="">
            </div>
        </a>
        
    </div>
</div>



@endsection