@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                    <div class="input-group my-3">
                        <div class="input-group-prepend"><span class="input-group-text">Title</span></div><input class="form-control" type="text" name="title">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="my-3">
                        <label for="description">Description</label>
                        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                        <div class="input-group-append"></div>
                    </div>
                    <div class="form-group my-3">
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary']);}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/datapicker.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/litepicker/2.0.11/litepicker.js"></script>
@endsection
