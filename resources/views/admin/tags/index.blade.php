@extends('layout.admin')
@section('content')
<a href="{{route('admin.tags.create')}}"><h3>Nuovo Tag</h3></a>
<div class="container">
    @foreach($tags as $tag)
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="{{route('admin.tags.show',$tag->id)}}">
        <h5 class="card-title">{{$tag->name}}</h5>
    </a>
    <a href="{{route('admin.tags.edit')$tag->id)}}" class="btn btn-info">Modifica</a>
            <form action="{{route('admin.tags.destroy',   $tag->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning">Cancella</button>
            </form>
  </div>
</div>






    @endforeach

</div>





@endforeach
