@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">Edit product form</div>
                        <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                        <div class="card-body">
                            <form action="{{ route('product.update', ['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $product->name }}" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label>Price</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" value="{{ $product->price }}" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label>Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control mb-3">
                                        <img src="{{ asset($product->image) }}" alt="" height="50" width="50">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" name="update-btn" class="btn btn-info" value="Update product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
