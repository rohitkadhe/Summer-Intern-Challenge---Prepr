@extends('layouts.app')

@section('content')
  <h4 class="h4">Labs</h4>
  @if(count($labs)>0)
   @foreach ($labs as $lab)
   <div class="card mb-3">
    <img class="card-img-top" src="{{$lab->image_url}}" alt="Lab Card Image">
    <div class="card-body">
      <h5 class="card-title">{{$lab->title}}</h5>
      <p class="card-text">{{$lab->description}}</p>
      <p class="card-text"><small class="text-muted">Category: {{$lab->category}}</small></p>
    </div>
  </div>
   @endforeach
   @else
    <h2>No Labs found!</h2>
  @endif
@endsection