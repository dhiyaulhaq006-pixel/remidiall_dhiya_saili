@extends('layouts.main')

@section('content')
<h1>Daftar Postingan</h1>

@foreach($posts as $post)
    <h3>{{ $post['title'] }}</h3>
    <p>{{ $post['body'] }}</p>
    <hr>
@endforeach

@endsection
