@extends('layouts.admin')
@section('content')
<a href="{{route('admin.tags.index')}}"><h3>Ritorna nei Tag</h3></a>
<div class="container">
    @foreach($tag->posts as $post)
    <a href="{{route('admin.posts.show',$post->id)}}">
    <div class="card" style="width: 18rem;">
  <img src="{{$post->image}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$tag->name}}</p>
    <p class="card-text">{{$post->content}}</p>
  </div>
</div>
    </a>
    @endforeach
</div>