@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1 class="text-primary">Welcome To PreprLabs Demo App</h1>
    @guest
    <h5 class="text-light-lg-left">Login or Register to explore new labs and learn more!</h5>
    @endguest
</div>
@endsection
