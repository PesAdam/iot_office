@extends('welcome')

@section('content')
    @if ($security2)
        <p>ID: {{ $security2->id }}</p>
        <p>Motion: {{ $security2->motion }}</p>
        <p>Temperature: {{$security2->temperature_value}}</p>
        <p>Motion Time: {{ $security2->motion_time }}</p>
        <p>Huminidity: {{ $security2->humidity_value }}</p>
    @else
        <p>No data available</p>
    @endif
@endsection
