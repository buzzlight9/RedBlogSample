@extends('layouts.app')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=241490523101895&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="headerImg">
    <div class="landing-text">
    <h1>BLOG</h1>
        @guest
            <h3>Register to get started or Login now</h3>
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
                <small><em>Written on {{$post->created_at}} by {{$post->user->name}}</em></small> <br> <br>
                
            </div>
            <div class="col-sm-8">
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
        <hr>
        <div class="fb-like" data-href="{{Request::url()}}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
        <br> <br>
        <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10"></div>
    </div>
</div>
@endsection