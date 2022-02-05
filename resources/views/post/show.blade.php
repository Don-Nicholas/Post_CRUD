@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="/post" class="btn btn-primary" type="button" style="float: left">Go Back</a>
        </div>
    </div>
</div>
<div class="container mt-2">
    <div class="row my-3">
        <div class="col-sm-6 col-md-6"><img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid"></div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 m-5">
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <p>Written on {{$post->created_at}} by {{$post->user->name}}</p>
        </div>
    </div>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
        <div class="row">
            <div class="col-sm-6">
                <a href="/post/{{$post->id}}/edit" class="btn btn-primary" type="button" style="float: left">Edit Post</a>
            </div>
            <div class="col-sm-6">
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    <button class="btn btn-danger" type="submit">DELETE</button>
                {!!Form::close()!!}
            </div>
        </div>            
        @endif
    
        
    @endif
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
@endsection
