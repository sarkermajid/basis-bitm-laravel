@extends('master')


@section('bitm')

@endsection

@section('heading')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Full Name Program</div>
                        <div class="card-body">
                            <form action="{{ route('full-name') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="first_name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="last_name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ Session::get('message') }}" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="btn" value="Make full name">
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
