@extends('layouts.tailor_app')
@section('contain')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="row mt-2">
                    <div class="col-10">
                        <h3>New Order</h3>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('order_index') }}" class="btn btn-success" style="float: right;">View ALL</a>
                    </div>
                </div>

                @if (Session::has('message'))
                    <p class="alert alert-info">{{ Session('message') }}</p>
                @endif

                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('order_store') }}" method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-body mb-2">

                                    <div class="row">
                                        <div class="col-4">
                                            @php
                                                $order = DB::table('orders')
                                                    ->orderBy('id', 'DESC')
                                                    ->first();
                                               
                                                if ($order) {
                                                    $order_no = intval($order->id + 1);
                                                }else{
                                                    $order_no = 1;
                                                }
                                            @endphp
                                            <div class="form-group mb-1">
                                                <label for="order_no">Order No <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="order_no" name="order_no"
                                                    placeholder="Enter Order No" value="{{ $order_no }}">
                                                @error('order_no')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group mb-1">
                                                <label for="order_date">Order Date<span style="color:red;">*</span></label>
                                                <input type="date" class="form-control" id="order_date" name="order_date"
                                                    placeholder="Enter Order Date" value="{{ old('order_date') }}">
                                                @error('order_date')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="delibary_date">Delibary Date<span
                                                        style="color:red;">*</span></label>
                                                <input type="date" class="form-control" id="delibary_date"
                                                    name="delibary_date" placeholder="Enter Delibary Date"
                                                    value="{{ old('delibary_date') }}">
                                                @error('delibary_date')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="customer_name">Customer Name<span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="customer_name"
                                                    name="customer_name" placeholder="Enter Customer Name"
                                                    value="{{ old('customer_name') }}">
                                                @error('customer_name')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="customer_phone">Customer Phone<span
                                                        style="color:red;">*</span></label>
                                                <input type="number" class="form-control" id="customer_phone"
                                                    name="customer_phone" placeholder="Enter Customer Phone"
                                                    value="{{ old('customer_phone') }}">
                                                @error('customer_phone')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reff_no">Reff No.</label>
                                                <input type="text" class="form-control" id="reff_no" name="reff_no"
                                                    placeholder="Enter Reff No.">
                                                @error('reff_no')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="punjabi_id">Punjabi Item</label>
                                                <select class="form-control" name="punjabi_id" id="punjabi_id">
                                                    <option value="">Select Option</option>
                                                    @foreach ($PunjabiItem as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('punjabi_id')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="punjabi_qty">Punjabi QTY</label>
                                                <input type="number" class="form-control" id="punjabi_qty"
                                                    name="punjabi_qty">
                                                @error('punjabi_qty')
                                                    <span class="btn-warning" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="paijama_id">Paijama Item</label>
                                                <select class="form-control" name="paijama_id" id="paijama_id">
                                                    <option value="">Select Option</option>
                                                    @foreach ($PaijamaItem as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('paijama_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="paijama_qty">Paijama QTY</label>
                                                <input type="number" class="form-control" id="paijama_qty"
                                                    name="paijama_qty">
                                                @error('punjabi_qty')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="kapor_price">Kapore</label>
                                                <input type="number" class="form-control" id="kapor_price"
                                                    name="kapor_price" onchange="Acc()">
                                                @error('kapor_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="mojuri_price">Mojuri</label>
                                                <input type="number" class="form-control" id="mojuri_price"
                                                    name="mojuri_price" onchange="Acc()">
                                                @error('mojuri_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="chain_price">Chain</label>
                                                <input type="number" class="form-control" id="chain_price"
                                                    name="chain_price" onchange="Acc()">
                                                @error('chain_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="botam_price">Bottam</label>
                                                <input type="number" class="form-control" id="botam_price"
                                                    name="botam_price" onchange="Acc()">
                                                @error('botam_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="sub_total">Total TK.</label>
                                                <input type="number" class="form-control" id="sub_total"
                                                    name="sub_total">
                                                @error('sub_total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="discount">Discount TK.</label>
                                                <input type="number" class="form-control" id="discount"
                                                    name="discount" onchange="Dis()">
                                                @error('discount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="total">ALL Total TK.</label>
                                                <input type="number" class="form-control" id="total"
                                                    name="total">
                                                @error('total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="paybale">Paybale TK.</label>
                                                <input type="number" class="form-control" id="paybale"
                                                    name="paybale" onchange="Acc2()">
                                                @error('paybale')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="balance">Balance TK.</label>
                                                <input type="number" class="form-control" id="balance" name="balance"
                                                    value="{{ old('balance') }}">
                                                @error('balance')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-success "
                                            style="float: right;">Save</button>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function Acc() {
            $("#sub_total").empty();
            let kapor_price = $("#kapor_price").val();
            let mojuri_price = $("#mojuri_price").val();
            let chain_price = $("#chain_price").val();
            let botam_price = $("#botam_price").val();
            let sub_totla = parseInt(kapor_price) + parseInt(mojuri_price) + parseInt(chain_price) + parseInt(botam_price);
            $("#sub_total").val(parseInt(sub_totla));
        }
        function Dis() {
            let sub_total = $("#sub_total").val();
            let discount = $("#discount").val();
            let total = sub_total - discount ;
            $("#total").val(parseInt(total));
        }
        
        function Acc2() {
            let paybale = $("#paybale").val();
            let total = $("#total").val();
            let balance = total - paybale ;
            $("#balance").val(parseInt(balance));
        }
    </script>
@endsection
