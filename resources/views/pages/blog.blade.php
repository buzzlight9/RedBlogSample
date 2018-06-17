@extends('layouts.app')

@section('content')
<div class="headerImg">
		<div class="landing-text">
			<h1>{{$blogTitle}}</h1>
			<h3>Get your bussiness online</h3>
			<a href="{{ route('register') }}" class="btn btn-info btn-lg" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
		</div>
	</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="title">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <h2>Basic</h2>
                    </div>
                    <div class="price">
                        <h4><sup>£</sup>50</h4>
                    </div>
                    <div class="option">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Single Page</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>1 Year Free Domain</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>1 Year Hosting</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>Live Support</li>
                        </ul>
                    </div>
                    <a href="#">Order Now</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="title">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                        <h2>Standard</h2>
                    </div>
                    <div class="price">
                        <h4><sup>£</sup>150</h4>
                    </div>
                    <div class="option">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Multi Page</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>1 Year Free Domain</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>1 Year Free Hosting</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Live Support</li>
                        </ul>
                    </div>
                    <a href="#">Order Now</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="title">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                        <h2>Premium</h2>
                    </div>
                    <div class="price">
                        <h4><sup>£</sup>250</h4>
                    </div>
                    <div class="option">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Dynamic Website</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Content Management System</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>1 Year Free Domain</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>1 Year Free Hosting</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Live Support</li>
                        </ul>
                    </div>
                    <a href="#">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection