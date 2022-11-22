@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4>Edit Blog</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                            <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Category Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="category_id" class="form-control">
                                            <option value="">--- Category Name ---</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $blog->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Blog title</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $blog->title }}" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Short Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" name="short_description">{{ $blog->short_description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Long Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" name="long_description">{{ $blog->long_description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control mb-3" name="image">
                                        <img src="{{ asset($blog->image) }}" alt="" height="50" width="70">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="" value="Update blog">
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
