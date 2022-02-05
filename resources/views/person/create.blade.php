@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                {!! Form::open(['action' => 'PersonsController@store', 'method' => 'POST']) !!}
                    <div class="input-group my-3">
                        <div class="input-group-prepend"><span class="input-group-text">First Name</span></div><input class="form-control" type="text" name="firstname">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend"><span class="input-group-text">Last Name</span></div><input class="form-control" type="text" name="lastname">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend"><span class="input-group-text">Date</span></div><input class="form-control" type="text" id="datePicker" placeholder="Select Date" name="birthdate">
                        <div class="input-group-append"></div>
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
