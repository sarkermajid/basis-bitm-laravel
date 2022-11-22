@extends('master')


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header"><h4>Blog Information</h4></div>
                        <div class="card-body text-white">
                            <table class="table table-bordered text-white ">
                                <tr>
                                    <th>Blog Id</th>
                                    <td>{{ $blog->id }}</td>
                                </tr>
                                <tr>
                                    <th>Blog Title</th>
                                    <td>{{ $blog->title }}</td>
                                </tr>
                                <tr>
                                    <th>Category Name</th>
                                    <td>{{ $blog->category->name }}</td>
                                </tr>
                                <tr>
                                    <th>Blog Short Description</th>
                                    <td>{{ $blog->short_description }}</td>
                                </tr>
                                <tr>
                                    <th>Blog Long Description</th>
                                    <td>{{ $blog->long_description }}</td>
                                </tr>
                                <tr>
                                    <th>Blog Image</th>
                                    <td><img src="{{ asset($blog->image) }}" alt="" height="50" width="70"></td>
                                </tr>
                                <tr>
                                    <th>Blog Publication Status</th>
                                    <td>{{ $blog->status }}</td>
                                </tr>
                                <tr>
                                    <th>Total Hit Count</th>
                                    <td>{{ $blog->hit_count }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
