@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/person/create" class="btn btn-primary" type="button" style="float: left">Add New Person</a>
        </div>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>Person ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Birth Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($persons) > 0)
                            @foreach ($persons as $person)
                            <tr onclick="window.location='/person/{{$person->id}}';" style="cursor: pointer;">
                                <td>{{$person->id}}</td>
                                <td>{{$person->firstname}}</td>
                                <td>{{$person->lastname}}</td>
                                <td>{{$person->birthdate}}</td>
                            @endforeach
                            
                        @else
                            <h1>No available data for person.</h1>
                        @endif
                    </tbody>
                </table>
                {{$persons->links()}}
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
@endsection
