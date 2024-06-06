@extends('welcome')
@section('content')

<style>
table {
        width: 70%;
        border-collapse: collapse;
        border-radius: 1rem;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #4e5053;
        color: white;
    }
    
    tr:hover {
        background-color: #f5f5f5;
    }



.headers h1 {
    text-align: center;
}
</style>

<div class="dashboard">
    <div class="headers">
        <h1>Zamestnanci</h1>
    </div>

    <table>
        <thead>
            <tr>
                <th>Meno</th>
                <th>Čas príchodu</th>
                <th>Čas odchodu</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach($tables as $table)
                <tr>
                    <td>{{$table['name']}}</td>
                    <td>{{$table['arrival_time']}}</td>
                    <td>{{$table['departure_time']}}</td>
                    <td>{{$table['status']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>

    <div class="button-container">
        {{-- <button onclick="refreshPage()" class="button">Obnoviť</button> --}}
        <button class="button"><a href="/historia">História</a></button>
        {{-- <button onclick="goBack()" class="button spat">Späť</button> --}}
    </div>
</div>

<script>
    function refreshPage() {
        location.reload();
    }

    function goBack() {
        window.history.back();
    }
</script>

@endsection
