@extends('layouts.app')
@section('content')
<div class="headerImg">
    <div class="landing-text">
    <h1>BLOG</h1>
        <h3>Get your bussiness online</h3>
        @guest
				<a href="{{ route('login') }}" class="btn btn-default btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-default btn-lg">Register</a>
			@else
				<a href="/dashboard" class="btn btn-default btn-lg">Go To Dashboard</a>
			@endguest
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                    @endif
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
                    
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @endif
            </div>
        </div>
    </div>
</div>
@if(count($posts) > 0)
@foreach($posts as $post)
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row"> 
                    <div class="col-sm-6">
                        <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 text-justify ">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach        
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
    @else
        <p>No posts found</p>
    @endif
@endsection