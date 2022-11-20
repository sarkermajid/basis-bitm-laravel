@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card bg-dark text-white mb-3">
                        <img src="{{ asset($product->image) }}" alt="" height="200">
                        <div class="card-body">
                            <h3>{{ $product->name }}</h3>
                            <p>TK.{{ $product->price }}</p>
                            <hr/>
                            <a href="" class="btn btn-info">details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
