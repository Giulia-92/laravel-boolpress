@extends('layouts.admin')

@section('content')
<div class="container">
  <form action="{{route('admin.categories.store')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Categoria</label>
    <input type="text" class="form-control" name="name" placeholder="inserisci categoria">
    <div class="alert alert-warning"> {{$message}}</div>
    <button type="submit" class="btn btn-info">Crea</button>
  </div>
</div>
@endsection