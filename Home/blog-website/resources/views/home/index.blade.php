@extends('master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-6">
                        <div class="card card-body bg-dark text-white h-100">
                            <img src="{{ asset($blog->image) }}" alt="" height="200">
                            <h3 class="pt-3">{{ $blog->title }}</h3>
                            <p class="fs-5">{{ $blog->short_description }}</p>
                            <span class="pb-3">Category: {{ $blog->category->name }} </span>
                            <a href="{{ route('blog.details',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm">Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
