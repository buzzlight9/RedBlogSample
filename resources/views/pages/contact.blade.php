@extends('layouts.app')

@section('content')
<div class="headerImg">
		<div class="landing-text">
			<h1>{{$contact}}</h1>
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
				<div class="col-sm-12">
					<form id="contact-form" method="post" action="contact.php" role="form">
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
    </div>
    @endsection