@extends('layouts.app')

@section('content')
<div class="headerImg">
		<div class="landing-text">
		<h1>{{$about}}</h1>
			<h3>Blog Platform For You</h3>
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
				<div class="col-sm-6">
					<img src="img/main.png" alt="">
				</div>
				<div class="col-sm-6 text-justify services">
					<h3>OUR MISSION</h3>
					<p>esponsive web design is a type of web design that provides a customized viewing experience for different browser platforms. A website created with responsive design will display a different interface depending on what device is used to access the site. For example, a responsive website may appear one way on a laptop, another way on a tablet, and still another way on smartphone.</p>
					<p>Today, many people access websites from mobile devices, rather than desktop computers or laptops. While most smartphones can display regular websites, the content is difficult to read and even harder to navigate. Therefore, at Fiji Web Solution we use responsive web design to provide a better web browsing experience on your website.</p>
				</div>
			</div>
		</div>
	</div>
@endsection