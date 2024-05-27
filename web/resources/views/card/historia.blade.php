@extends('welcome')
@section('content')


<style>
    table {
        width: 80%;
        border-collapse: collapse;
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
    width: 120px;
    height: 50px;
}
    
    .button:hover {
        background-color: #45a049; /* Tmavozelená farba */
    }
    
    .spat{
        background: #222222;
        padding: 5px 10px;
    }
    
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    
        .pagination a, .pagination span {
            margin: 0 5px;
            padding: 10px 15px;
            text-decoration: none;
            color: #4CAF50;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    
        .pagination .active span {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }
    
        .pagination a:hover {
            background-color: #45a049;
            color: white;
            border: 1px solid #45a049;
        }
    </style>
    
    

<div class="dashboard">
    <div class="headers">
        <h1>Zamestnanci historia</h1>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Meno</th>
                <th>Čas</th>
                <th>RFID ID</th>
                {{-- <th>Čas odchodu</th> --}}
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $table)
                <tr>
                    <td>{{$table['id']}}</td>
                    <td>{{$table['name']}}</td>
                    <td>{{$table['event_time']}}</td>
                    <td>{{$table['rfid_id']}}</td>
                    <td>{{$table['event_type']}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $tables->links() }}
    </div>
    <br>
    <button onclick="goBack()" class="button spat">Späť</button>
</div>

<script>
       function goBack() {
        window.history.back();
    }
</script>

@endsection