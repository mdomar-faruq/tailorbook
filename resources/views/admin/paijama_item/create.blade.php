@extends('layouts.tailor_app')
@section('contain')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="row mt-2">
                    <div class="col-10">
                        <h3>Add Paijama item</h3>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('Paijama_item_index') }}" class="btn btn-success" style="float: right;">View ALL</a>
                    </div>
                </div>

                @if (Session::has('message'))
                    <p class="alert alert-info">{{ Session('message') }}</p>
                @endif

                <div class="row">
                    <div class="col-12">

                        <form action="{{ route('Paijama_item_store') }}" method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group mb-1">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter title">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="rate">Rate</label>
                                        <input type="number" class="form-control" id="rate" name="rate"
                                            placeholder="Enter Rate">
                                        @error('rate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success" style="float: right;">Save</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
