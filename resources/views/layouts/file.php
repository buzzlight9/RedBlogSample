<!DOCTYPE html>
<html>
	<head>
		<title>{{config('app.name', 'RedBlog')}}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
	</head>
	<body>
		@include('inc.navbar')
        @yield('content')
		@include('inc.footer')
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace( 'article-ckeditor' );
		</script>
	</body>
</html>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                        <li><a href="/" class="active">HOME</a></li>
                        <li><a href="/about">ABOUT</a></li>
                        <li><a href="/services">SERVICES</a></li>
                        <li><a href="/posts">BLOG</a></li>
                        <li><a href="/contact">CONTACT</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
	</nav>
	
	<div id="app">
        

        <main class="py-4">
            @include('inc.navbar')
            @yield('content')
        </main>
    </div>




    //Posts

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