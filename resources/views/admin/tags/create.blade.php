@extends('layout.admin')
@section('content')

<div class="container">
    <form action="{{route('admin.posts. store')}}"method="POST"enctype="multipart/form-data">
        @csrf
       <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="inserire titolo">
       <div class="alert alert-danger">{{ $message }}</div>
      <button type="">inserisci</button>
    </form>

</div>








@endsection