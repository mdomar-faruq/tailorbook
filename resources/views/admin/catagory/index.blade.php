@extends('layouts.tailor_app')
@section('contain')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <h1>Catagory list</h1>
                <div class="card">
                <div class="card-body">
                <p>
                   
                </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SI NO</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>Edit/delete </td>
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
