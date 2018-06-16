@extends('layouts.app')

@section('content')
<div id="home">
		<div class="landing-text">
			<h1>{{$title}}</h1>
			
			@guest
				<a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register</a>
			@else
				<h3>Get Started</h3>
				<a href="/posts" class="btn btn-primary btn-lg">Explore</a>  <a href="/posts/create" class="btn btn-primary btn-lg">Create Post</a>
			@endguest
		</div>
	</div>
	
<script src="{{asset('js/custom.js')}}"></script>
@endsection
