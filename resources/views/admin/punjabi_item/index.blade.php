@extends('layouts.tailor_app')
@section('contain')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">

                <div class="row mt-2">
                    <div class="col-10">
                        <h1>Punjabi Item List</h1>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('punjabi_item_create') }}" class="btn btn-success" style="float: right;">Create</a>
                    </div>
                </div>

                @if (Session::has('message'))
                    <p class="alert alert-info">{{ Session('message') }}</p>
                @endif

                <div class="card">
                    <div class="card-body">
                        <p>

                        </p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SI NO</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col" width='20%' >Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($PunjabiItem as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->rate }}</td>
                                        <td>
                                            <a href="{{route('punjabi_item_edit',$value->id)}}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('punjabi_item_destroy', $value->id) }}"
                                                class="btn btn-danger">Delete</a>
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
@endsection
