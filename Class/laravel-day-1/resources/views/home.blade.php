@extends('master')

@section('bitm')
Home Page
@endsection

@section('heading')
    <section class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-success text-center">Home Page</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{ asset('/')}}img/{{ $blog['img'] }}"    alt="">
                        <div class="card-body">
                            <h4>{{ $blog['title'] }}</h4>
                            <p>{{ $blog['short_description'] }}</p>
                            <hr>
                            <a href="{{ route('blog-detail',['id' => $blog['id']]) }}" class="btn btn-outline-success">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
