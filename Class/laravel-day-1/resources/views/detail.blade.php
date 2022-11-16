@extends('master')

@section('bitm')
    Service detail page
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="{{ asset('/') }}img/{{ $blog['img'] }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1>{{ $blog['title'] }}</h1>
                    <p>{{ $blog['short_description'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

