@extends('layouts.admin')

@section('content')
<a href="{{route('admin.categories.create')}}">Crea nuova categoria</a>

<div class="container">
    @foreach($categories as $category)
        <div class="card text-center">
            <a href="{{route('admin.posts.show',$post->id)}}">
                <h5>{{category->name}}</h5>
            </a>
            <a href="{{route('admin.categories.edit')$category->id)}}" class="btn btn-info">Modifica</a>
            <form action="{{route('admin.categories.destroy',   $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning">Cancella</button>
            </form>
        </div>
    @endforeach
    
</div>
@endsection