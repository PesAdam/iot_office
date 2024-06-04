@extends('welcome')
@section('content')

<style>
table {
    width: 80%;
    border-collapse: collapse;
    margin: 0 auto; /* Center the table */
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f5f5f5;
}

.button {
    background-color: #4CAF50; /* Zelená farba */
    border: none;
    color: white;
    padding: 14px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}

.button:hover {
    background-color: #45a049; /* Tmavozelená farba */
}

.spat {
    background: #222222;
    padding: 14px 28px;
}

.button-container {
    text-align: center;
    margin-top: 20px;
}

a {
    text-decoration: none;
    color: #fbfffc;
    font-size: 20px;
    margin: 4px 2px;
}

a:hover {
    color: #45a049;
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
                <th>ID</th>
                <th>Meno</th>
                <th>RFID ID</th>
                <th>Čas príchodu</th>
                <th>Čas odchodu</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $table)
                <tr>
                    <td>{{$table['id']}}</td>
                    <td>{{$table['name']}}</td>
                    <td>{{$table['rfid_id']}}</td>
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
