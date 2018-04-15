@extends('layouts.app')

@section('content')
<div class="headerImg">
    <div class="landing-text">
        <h1>DASHBOARD</span></h1>
            <h3>Welcome To Your Dashboard {{ Auth::user()->name }}</h3>
            <a href="/posts/create" class="btn btn-default btn-lg">Create Post</a>
            <!--<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Dashboard</h3>
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Your Blog Posts</h3>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info" >Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}    
                                    </td>
                                </tr>   
                            @endforeach
                        </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
