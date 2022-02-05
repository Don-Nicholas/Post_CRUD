@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="/post/create" class="btn btn-primary" type="button" style="float: left">Add New Post</a>
        </div>
    </div>
</div>
<div class="container mt-2">
    
                @if (count($posts) > 0)
                    @foreach ($posts as $post)
                    <div class="row">
                        <div class="col-sm-4 col-md-4"><a href="/post/{{$post->id}}"><img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 my-3">
                        <h1><a href="/post/{{$post->id}}" class="text-decoration-none">{{$post->title}}</a></h1>
                        <p>{{$post->description}}</p>
                        <p>Written on {{$post->created_at}} by {{$post->user->name}}</p>
                    </div>
                </div>
                    @endforeach
                @else
                    <h1>No posts available.</h1>
                @endif
                {{$posts->links()}}
            
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
@endsection