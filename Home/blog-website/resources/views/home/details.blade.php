@extends('master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($blog->image) }}" alt="" height="500" width="600">
                </div>
                <div class="col-md-6">
                    <h2>{{ $blog->title }}</h2>
                    <p class="fs-3">{{ $blog->short_description }}</p>
                    <p class="fs-5">{{ $blog->long_description }}</p>
                    <p class="fs-5">Category: {{ $blog->category->name }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
