@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <section class="article-list">
        <div class="container">
            <div class="row articles">
                    @if (count($services) > 0)
                        @foreach ($services as $service)
                            <div class="col-sm-4 col-md-4 item">
                                <p class="description">{{$service}}</p>
                            </div>
                        @endforeach
                    @else
                        <p>No services available.</p>
                    @endif
            </div>
        </div>
    </section>
@endsection