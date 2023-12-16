@extends('layout')
@section('content')

    <div class="card" style="width: 30rem;">
        <img src="{{asset('images/'.$post->image)}}" class="card-img-top" alt="no image for this post">
        <div class="card-body">
          <h3 style="color: blue">post title:</h3>
          <h5 class="card-title"> {{ $post->title }}</h5>
          <h3 style="color: blue">post description:</h3>
          <p class="card-text"> {{$post->description}}</p>
          <h3 style="color: blue">created_at:</h3>
          <p class="card-text">{{$post->created_at}}</p>
          <h3 style="color: blue">updated_at:</h3>
          <p class="card-text">{{$post->updated_at}}</p>
        </form>
        </div>
      </div>
  @endsection
