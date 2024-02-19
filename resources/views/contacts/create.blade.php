@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Halaman Isi</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <label>Seluler</label></br>
        <input type="text" name="seluler" id="seluler" class="form-control"></br>
        <input type="submit" value="Simpan" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop