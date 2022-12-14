@extends('master')


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header"><h4>All Blogs Information</h4></div>
                        <div class="card-body text-white">
                            <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                            <h3 class="text-danger text-center">{{ Session::get('message_delete') }}</h3>
                            <table class="table table-bordered text-white ">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ substr($blog->short_description, '0', '50').'...' }}</td>
                                        <td>{{ substr($blog->long_description, '0', '100').'...' }}</td>
                                        <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="" height="50" width="70"></td>
                                        <td>
                                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info btn-sm d-inline-block">view</a>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary btn-sm d-inline-block">Edit</a>
                                            <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm d-inline-block">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
