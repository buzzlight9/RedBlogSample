@extends('layouts.app')

@section('content')
<div class="headerImg">
		<div class="landing-text">
			<h1>{{$title}}</h1>
			<h3>{{$subTitle}}</h3>
			@guest
				<!--<a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register</a>-->
			@else
				<a href="/posts" class="btn btn-primary btn-lg">Explore</a>
			@endguest
		</div>
</div>
<div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
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
<div class="padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<form id="contact-form" method="POST" action="{{url('contact')}}" role="form">
					{{csrf_field()}}
						<div class="messages"></div>
						<div class="controls">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_name">Firstname *</label>
										<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_lastname">Lastname *</label>
										<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_email">Email *</label>
										<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_phone">Phone</label>
										<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_subject">Subject *</label>
										<input id="form_subject" type="subject" name="subject" class="form-control" placeholder="Please enter the subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="form_message">Message *</label>
										<textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<input type="submit" class="btn btn-success btn-send" value="Send message">
								</div>
							</div>
						</div>
					</form>		
				</div>
			</div>
		</div>
		<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fredblog.cf%2F&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
    @endsection