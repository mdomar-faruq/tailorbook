<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PaijamaItem;
use App\Models\PunjabiItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Order = Order::with('PunjabiItem','PaijamaItem')->where('valid',1)->get();
        return view('admin.order.index',compact('Order'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $PaijamaItem = PaijamaItem::get();
       $PunjabiItem = PunjabiItem::get();
        return view('admin.order.create',compact('PaijamaItem','PunjabiItem'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'order_no' => 'required',
            'order_date' => 'required',
            'delibary_date' => 'required',
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'punjabi_id' => 'required',
            'punjabi_qty' => 'required',
        ]);

        $Order = new Order();
        $Order->user_id = Auth::id();
        $Order->order_no = $request->order_no;
        $Order->order_date = $request->order_date;
        $Order->delivery_date = $request->delibary_date;
        $Order->customer_name = $request->customer_name;
        $Order->customer_phone = $request->customer_phone;
        $Order->reff_no = $request->reff_no;
        $Order->punjabi_id = $request->punjabi_id;
        $Order->punjabi_qty = $request->punjabi_qty;
        $Order->paijama_id = $request->paijama_id;
        $Order->paijama_qty = $request->paijama_qty;
        $Order->kapor_price = $request->kapor_price;
        $Order->mojuri_price = $request->mojuri_price;
        $Order->chain_price = $request->chain_price;
        $Order->botam_price = $request->botam_price;
        $Order->sub_total = $request->sub_total;
        $Order->discount = $request->discount;
        $Order->total = $request->total;
        $Order->paybale = $request->paybale;
        $Order->balance = $request->balance;
        $Order->status =1;
        $Order->valid =1;
        $Order->save();
        return back()->with('message',"Add Successfull");
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Order = Order::find($id);
        $Order ->delete();
        return back()->with('message','Delete Successfull ');
    }
}
