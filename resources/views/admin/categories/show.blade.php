@extends('layouts.admin')
@section('content')

<a href="{{route('admin.categories.index')}}">torna alla category</a>
<div class="conatiner">
    @foreach (category->posts as $post)
     <div class="card" style="width: 18rem">
            <div class="card-body">
                <a href="{{route('admin.posts.show', $post->id)}}">
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$category->name}}</h6>
                    <img src="{{$post->image}}" alt="">
                    <p class="card-text">
                            {{$post->content}}</p>
                </a>
            </div>
        </div>
    @endforeach
</div>