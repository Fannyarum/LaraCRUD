@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Halaman Edit</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="nama" id="nama" value="{{$contacts->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$contacts->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="seluler" id="seluler" value="{{$contacts->mobile}}" class="form-control"></br>
        <input type="submit" value="Perbarui" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop