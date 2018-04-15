@extends('layouts.app')

@section('content')
<div id="home">
		<div class="landing-text">
		<h1>{{$title}}</h1>
			<h3>Get your bussiness online</h3>
			@guest
				<a href="{{ route('login') }}" class="btn btn-default btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-default btn-lg">Register</a>
			@else
				<a href="/posts" class="btn btn-default btn-lg">Explore</a>
			@endguest
		</div>
	</div>
	
<script src="{{asset('js/custom.js')}}"></script>
@endsection
