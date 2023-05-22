<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    public function tailore_register(Request $request)
    {
        $data = array();
        $data['name'] =  $request->name;
        $data['email'] =  $request->email;
        $data['created_at'] =  date('Y-m-d H:i:s');
        $data['password'] =  Hash::make($request->password);

        DB::table('users')->insert($data);
        return redirect()->route('login');
    }
}
