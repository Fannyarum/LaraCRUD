@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Halaman Telepon</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $contacts->nama }}</h5>
        <p class="card-text">Alamat : {{ $contacts->alamat }}</p>
        <p class="card-text">Ponsel : {{ $contacts->seluler }}</p>
  </div>
      
    </hr>
  
  </div>
</div>