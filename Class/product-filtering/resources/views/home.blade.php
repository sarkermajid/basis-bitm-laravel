@extends('master')

@section('title')
    Home
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-3 mb-3">
                    <div class="card card-body bg-dark text-white">
                        <img src="{{ asset('/') }}img/{{ $product['image'] }}" alt="" height="250">
                        <h3>{{ $product['name'] }}</h3>
                        <span>{{ $product['price'] }}</span>
                        <a href="" class="btn btn-success mt-3">more details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
