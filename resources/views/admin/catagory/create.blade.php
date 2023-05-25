@extends('layouts.tailor_app')
@section('contain')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <h1>ADD</h1>


                @if(Session::has('message'))
                <p class="alert alert-info">{{ Session('message') }}</p>
                @endif

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <form action="{{route('cat_store')}}" method="POST">
                            @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-2">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title"  name="title" aria-describedby="emailHelp"
                                        placeholder="Enter title">
                                </div>

                                <div class="row">
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-success float-right">Save</button>
                                    </div>
                                </div>
                                
                            
                                </div>
                        </div>
                       </form>
                    </div>
                    <div class="col-3"></div>
                </div>


            </div>
        </div>
    </div>
@endsection
