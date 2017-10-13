@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        
    </div>
    <div class="row text-center">
        <img src="{{asset('img/apc-logo.png')}}" class="" style="width:500px;">
    </div>
    <div class="h-menu">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
        </ul>
    </div>
</div>
@endsection
