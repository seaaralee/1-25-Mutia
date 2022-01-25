@extends('layouts.main')

@section('container')
<h1> About Page </h1>
    <h2> {{ $name }} </h2>
    <p> {{ $description }} </p>
    <img src="images/{{ $image }}" alt="{{ $name }}">
@endsection
    