@extends('layouts.main')

@section('container')
<h1> Home Page </h1>
    <br>
    <img src="images/{{ $image }}">
    <br>
    <h3> {{ $description }} </h3>
@endsection