<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_create()
    {
        return view('admin.order.create');
    }
}
