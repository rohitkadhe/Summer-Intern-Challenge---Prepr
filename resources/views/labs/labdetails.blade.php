@extends('layouts.app')

@section('content')
<h5 class="font-weight-light text-info text-uppercase font-weight-bold pb-2 mt-4 mb-2">Lab Details</h5>
<div class="card mb-3">
    <img class="card-img-top" src="{{$lab->image_url}}" alt="Lab Card Image">
    <div class="card-body">
        <div class="mb-3 mt-3"><a class="h5 card-title text-primary font-weight-bold"
                href="/labs/{{$lab->id}}">{{$lab->title}}</a></div>
        <p class="card-text">{{$lab->description}}</p>
        <p class="card-text">
            <span class="font-weight-bold text-dark">Location:</span>
            <a class=" text-primary" target="__blank" href="/map/{{$location->id}}">{{$location->address}}</a>
        </p>
        <p class="card-text">
            <span class="font-weight-bold text-dark">Category:</span>
            <span class="text-muted">{{$lab->category}}</span>
        </p>
        <p class="card-text">
            <span class="font-weight-bold text-dark">Visibility:</span>
            <span class="text-muted">{{$lab->privacy}}</span>
        </p>
    </div>
</div>
@endsection
