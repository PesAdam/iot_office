@extends('welcome')

@section('content')
    @if ($security3)
        <p>ID: {{ $security3->id }}</p>
        <p>Motion: {{ $security3->motion }}</p>
        <p>Temperature: {{$security3->temperature_value}}</p>
        <p>Motion Time: {{ $security3->motion_time }}</p>
        <p>Huminidity: {{ $security3->humidity_value }}</p>
    @else
        <p>No data available</p>
    @endif
@endsection
