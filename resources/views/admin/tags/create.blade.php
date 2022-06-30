@extends('layout.admin')
@section('content')

<div class="container">
    <form action="{{route('admin.posts. store')}}"method="POST"enctype="multipart/form-data">
        @csrf
       <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="inserire tag">
       <div class="alert alert-danger">{{ $message }}</div>
      <button type="submit" class="btn btn-info">Nuovo Tag</button>
    </form>

</div>








@endsection