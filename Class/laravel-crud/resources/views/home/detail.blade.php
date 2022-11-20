@extends('master')


@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($product->image) }}" alt="" height="300">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <h5>{{ $product->price }}</h5>
            </div>
        </div>
    </div>
@endsection
