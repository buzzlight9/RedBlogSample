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
<div id="home">
		<div class="landing-text">
			<h1>{{$title}}</h1>
			
			@guest
	        <!--<a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register</a>-->
			@else
				<h3>{{$subTitle}}</h3>
				<a href="/posts" class="btn btn-primary btn-lg">Explore</a>  <a href="/posts/create" class="btn btn-primary btn-lg">Create Post</a>
			@endguest
		</div>
	</div>
	
<script src="{{asset('js/custom.js')}}"></script>
@endsection
