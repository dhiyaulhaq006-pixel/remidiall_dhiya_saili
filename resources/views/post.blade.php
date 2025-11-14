@extends('layouts.main')

@section('content')
<h1>Daftar Postingan</h1>

{{-- LIST POSTINGAN --}}
@foreach($posts as $post)
    <h3>{{ $post['title'] }}</h3>
    <p>{{ $post['body'] }}</p>
    <hr>
@endforeach


{{-- CARD PROFILE --}}
<div class="card" style="width: 20rem;">
    <img class="card-img-top" 
         src="images/ubgg.jpg" 
         alt="Gedung UNIVERSITAS BUMIGORA">
    
    <div class="card-body">
        <h5 class="card-title">Gedung UNIVERSITAS BUMIGORA</h5>
        <p class="card-text">
            Foto Gedung UBG.
        </p>
        <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
</div>

<div class="card" style="width: 20rem;">
    <img class="card-img-top" 
         src="images/UIN.jpg" 
         alt="Gedung UNIVERSITAS ISLAM NEGERI">
    
    <div class="card-body">
        <h5 class="card-title">Gedung UNIVERSITAS ISLAM NEGERI</h5>
        <p class="card-text">
            Foto Gedung UIN.
        </p>
        <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
</div>

<div class="card" style="width: 20rem;">
    <img class="card-img-top" 
         src="images/undikma.jpg" 
         alt="Gedung UNDIKMA">
    
    <div class="card-body">
        <h5 class="card-title">Gedung UNDIKMA</h5>
        <p class="card-text">
            Foto Gedung UNDIKMA.
        </p>
        <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
</div>

<div class="card" style="width: 20rem;">
    <img class="card-img-top" 
         src="images/unizar.webp" 
         alt="Gedung UNIZAR">
    
    <div class="card-body">
        <h5 class="card-title">Gedung UNIZAR</h5>
        <p class="card-text">
            Foto Gedung UNIZAR.
        </p>
        <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
</div>

<div class="card" style="width: 20rem;">
    <img class="card-img-top" 
         src="images/unram.jpeg" 
         alt="Gedung Rektorat Universitas Mataram">
    
    <div class="card-body">
        <h5 class="card-title">Rektorat Universitas Mataram</h5>
        <p class="card-text">
            Foto Gedung Rektorat UNRAM.
        </p>
        <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
</div>

<div class="card" style="width: 20rem;">
    <img class="card-img-top" 
         src="images/unw.jpg" 
         alt="Gedung UNW">
    
    <div class="card-body">
        <h5 class="card-title">Gedung UNW</h5>
        <p class="card-text">
            Foto Gedung UNW.
        </p>
        <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
</div>

@endsection
