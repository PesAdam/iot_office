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
.f {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

/* Styling for each card */
.card {
    flex: 1;
    padding: 20px;
    border-radius: 8px;
    /* background-color: #fff; */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-10px);
}

.card a {
    text-decoration: none;
    color: inherit;
}

.card h2 {
    font-size: 1.5em;
    color: #333;
    margin: 0;
}

</style>

<div class="dashboard">
    <div class="headers">
        <h1>Pracovisko</h1>
    </div>   
    <div class="f">
        <a href="/pracovisko/objekt1">
            <div class="card">
                <h2>Objekt 1</h2>
            </div>
        </a>

        <a href="/pracovisko/objekt2">
            <div class="card">
                <h2>Objekt 2</h2>
            </div>
        </a>
        
    </div>
</div>



@endsection