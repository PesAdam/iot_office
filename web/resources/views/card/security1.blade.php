@extends('welcome')

@section('content')
    @if ($security1)
        <p>ID: {{ $security1->id }}</p>
        <p>Motion: {{ $security1->motion }}</p>
        <p>Temperature: {{$security1->temperature_value}}</p>
        <p>Motion Time: {{ $security1->motion_time }}</p>
        <p>Huminidity: {{ $security1->humidity_value }}</p>
    @else
        <p>No data available</p>
    @endif
@endsection
