@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card">
  <div class="card-header">
   Nuova Categoria
  </div>
  <div class="card-body">
    <form action="{{route('admin.categories.store')}}" method="POST">
    @csrf</form>
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old ('name')}}" placeholder="insert name">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <div class="alert alert-danger">
        {{$message}}
    </div>
    <button type="submit" class="btn btn-info">submit</button>
  </div>
</div>
</div>
@endsection