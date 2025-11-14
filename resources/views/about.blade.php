@extends('layouts.main')

@section('content')
<h1>Tentang Penulis</h1>

@foreach($authors as $a)
    <h3>{{ $a['name'] }}</h3>
    <p>{{ $a['desc'] }}</p>
    <hr>
@endforeach

@endsection
