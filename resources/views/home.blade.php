@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="row">
                    <div class="col-sm-3 m-3">
                        <a href="/post/create" class="btn btn-primary">Create Post</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    @if (count($posts) > 0)
                        <table class="table table-striped table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th colspan="2" class="text-center"></th>
                                </tr>
                            </thead>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                @if (!Auth::guest()) 
                                    <td><a href="/post/{{$post->id}}/edit" class="btn btn-light">Edit</a></td>
                                    <td>
                                        <div class="col-sm-6">
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                <button class="btn btn-danger" type="submit">DELETE</button>
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
