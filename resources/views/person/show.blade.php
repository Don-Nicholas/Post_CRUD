@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/person/" class="btn btn-primary" type="button" style="float: left">Go Back</a>
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
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <td>{{$person->id}}</td>
                                <td>{{$person->firstname}}</td>
                                <td>{{$person->lastname}}</td>
                                <td>{{$person->birthdate}}</td>
                                <td><a href="/person/{{$person->id}}/edit"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
    
                                        <path d="M13.5858 3.58579C14.3668 2.80474 15.6332 2.80474 16.4142 3.58579C17.1953 4.36683 17.1953 5.63316 16.4142 6.41421L15.6213 7.20711L12.7929 4.37868L13.5858 3.58579Z" fill="currentColor"></path>
                                        <path d="M11.3787 5.79289L3 14.1716V17H5.82842L14.2071 8.62132L11.3787 5.79289Z" fill="currentColor"></path>
                                    </svg></a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PersonsController@destroy', $person->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            <button class="btn btn-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
    
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2C8.62123 2 8.27497 2.214 8.10557 2.55279L7.38197 4H4C3.44772 4 3 4.44772 3 5C3 5.55228 3.44772 6 4 6L4 16C4 17.1046 4.89543 18 6 18H14C15.1046 18 16 17.1046 16 16V6C16.5523 6 17 5.55228 17 5C17 4.44772 16.5523 4 16 4H12.618L11.8944 2.55279C11.725 2.214 11.3788 2 11 2H9ZM7 8C7 7.44772 7.44772 7 8 7C8.55228 7 9 7.44772 9 8V14C9 14.5523 8.55228 15 8 15C7.44772 15 7 14.5523 7 14V8ZM12 7C11.4477 7 11 7.44772 11 8V14C11 14.5523 11.4477 15 12 15C12.5523 15 13 14.5523 13 14V8C13 7.44772 12.5523 7 12 7Z" fill="currentColor"></path>
                                            </svg></button>
                                        {!!Form::close()!!}
                                    </td>
                                {{-- <td><a href=""></a></td> --}}
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
@endsection