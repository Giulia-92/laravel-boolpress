@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{route('admin.categories.    update',$category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome Categoria</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="Inserire categoria">
            <div class="alert alert-warning"> {{$message}}</div>
            <button type="submit" class="btn btn-info">Crea</button>

        </div>
    </form>

</div>












@endsection