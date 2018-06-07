@extends('layouts.app')

@section('content')
<div class="headerImg">
		<div class="landing-text">
        <h1>{{$title[3]}}</h1>
			<h3>Get your bussiness online</h3>
			@guest
				<a href="{{ route('login') }}" class="btn btn-default btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-default btn-lg">Register</a>
			@else
				<a href="/posts" class="btn btn-default btn-lg">Explore</a>
			@endguest
		</div>
	</div>
<div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 services">
                <h3>{{$title[0]}}</h3>
                <p>{{$services[0]}}</p>
                </div>
                <div class="col-lg-4 services">
                    <h3>{{$title[1]}}</h3>
                <p>{{$services[1]}}</p>
                </div>
                <div class="col-lg-4 services">
                    <h3>{{$title[2]}}</h3>
                <p>{{$services[2]}}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 col-md-12 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls poster="img/poster.png">
                            <source src="video/FijiWebIntro.mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h4>Design with latest technology</h4>
                    <p>Latest Adobe Products such as Adobe XD...Adobe PhotoShop. Adobe XD provides faster prototype. Adobe Illustrator for smooth and flexible vectors. Collaborating tools to keep you updated on the design. </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <img src="img/adobe1.png" class="img-responsive" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h4>Built with latest technology</h4>
                    <p>HTML5 and CSS3 is the skeleton for the Front-End. The Bootstrap Framework is also in-coporated. PHP drives the Back-End for a more dynamic outlook. JavaScript...Laravel are also some of the technologies we cultivate.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <img src="img/code1.png" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection