@extends('master')

@section('bitm')
@endsection

@section('heading')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Calculator</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('calculator') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-3">first number</div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Second number</div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Your Choice</div>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" name="choice" value="+">+</label>
                                        <label for=""><input type="radio" name="choice" value="-">-</label>
                                        <label for=""><input type="radio" name="choice" value="*">*</label>
                                        <label for=""><input type="radio" name="choice" value="/">/</label>
                                        <label for=""><input type="radio" name="choice" value="%">%</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="cal-btn" value="Calculate">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Result</div>
                                    <div class="col-md-9">
                                        <input type="number" value="{{ Session::get('message') }}" class="form-control" readonly>
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
