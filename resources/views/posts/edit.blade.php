@extends('layouts.app')

@section('content')
<div class="headerImg">
		<div class="landing-text">
			<h1>EDIT POST</h1>
			<h3>Get your bussiness online</h3>
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
                    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="messages"></div>
						<div class="controls">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										{{Form::label('title', 'Title *')}}
										{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Please enter the title of your post *'])}}
										<div class="help-block with-errors"></div>
									</div>
                                </div>
							</div>
                            <div class="row">
								<div class="col-md-12">
									<div class="form-group">
                                        {{Form::label('body', 'Body *')}}
                                        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Please enter the body of your post *'])}}
										<div class="help-block with-errors"></div>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{Form::file('cover_image')}}
                                        </div>
                                    </div>
                                </div>
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}	
				</div>
			</div>
		</div>
    </div>
    @endsection