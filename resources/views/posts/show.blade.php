@extends('layouts.app')
@section('content')
<div class="headerImg">
    <div class="landing-text">
    <h1>BLOG</h1>
        <h3>Get your bussiness online</h3>
        @guest
			<a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register</a>
		@else
			<a href="/posts" class="btn btn-primary btn-lg">Explore</a>
		@endguest
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p><a href="/posts" class="btn btn-info">Go Back</a></p>
            </div>
            <div class="col-sm-6 text-justify services">
                <h3>{{$post->title}}</h3>
                <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                <p>{!!$post->body!!}</p>
                <hr>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
            <div class="col-sm-12">
                @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection