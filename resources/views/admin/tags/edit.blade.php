@extends('layouts.admin')
@section('content')
<form action="{{route('admin.tags.store')}}" method="POST">
@csrf
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="tag name" name="name" value="{{old('name')}}">

</div>
<button type="submit" class="btn btn-info">Nuovo Tag</button>
</form>

@endsection