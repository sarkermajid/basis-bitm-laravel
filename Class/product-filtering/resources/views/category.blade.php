@extends('master')

@section('title')
    Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-3 mb-3">
                        <div class="card card-body bg-dark text-white">
                            <img src="{{ asset('/') }}img/{{ $category['image'] }}" alt="" height="250">
                            <h3>{{ $category['name'] }}</h3>
                            <span>{{ $category['price'] }}</span>
                            <a href="" class="btn btn-success mt-3">more details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
