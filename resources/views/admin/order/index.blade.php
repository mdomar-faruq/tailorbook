@extends('layouts.tailor_app')
@section('contain')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">

                <div class="row mt-2">
                    <div class="col-10">
                        <h1>Order List</h1>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('order_create') }}" class="btn btn-success" style="float: right;">Create</a>
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
                                    <th scope="col">Order NO / Order Date & delivery</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Customer Phone / Reff.No</th>
                                    <th scope="col">Punjabi Item / QTY</th>
                                    <th scope="col">Paijama Item / QTY</th>
                                    <th scope="col">Receive</th>
                                    <th scope="col">Balance</th>
                                    <th scope="col" width='10%' >Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($Order as $key => $value)
                                    <tr>
                                        <td>{{ $value->order_no }} <br> {{ $value->order_date }} <br> {{ $value->delivery_date }}</td>
                                        <td>{{ $value->customer_name }}</td>
                                        <td>{{ $value->customer_phone }} <br> {{ $value->reff_no }}</td>
                                        <td>{{ $value->PunjabiItem->title }} <br> {{ $value->punjabi_qty }}</td>
                                        <td>{{ $value->PaijamaItem->title }} <br> {{ $value->paijama_qty }}</td>
                                        <td>{{ $value->paybale }}</td>
                                        <td>{{ $value->balance }}</td>
                                        <td>
                                            <a href="{{route('order_edit',$value->id)}}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('order_destroy', $value->id) }}"
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
