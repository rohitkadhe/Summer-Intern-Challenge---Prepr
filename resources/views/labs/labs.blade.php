@extends('layouts.app')

@section('content')
  <div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <h5 class="card-header font-weight-bold text-info text-uppercase">Labs</h5>
                <div class="card-body">
                  @if(count($labs)>0)
                  @foreach ($labs as $lab)
                  <div class="card mb-3">
                    <img class="card-img-top" src="{{$lab->image_url}}" alt="Lab Card Image">
                    <div class="card-body">
                      <div class="mb-3 mt-3"><a class="h5 card-title text-primary font-weight-bold" href="/labs/{{$lab->id}}">{{$lab->title}}</a></div>
                      <p class="card-text">{{$lab->description}}</p>
                      <p class="card-text">
                        <span class="font-weight-bold text-dark">Category:</span> 
                        <span class="text-muted">{{$lab->category}}</span>
                      </p>
                    </div>
                  </div>
                   @endforeach
                   {{$labs->links()}}
                   @else
                    <h2>No Labs found!</h2>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- card --}}
