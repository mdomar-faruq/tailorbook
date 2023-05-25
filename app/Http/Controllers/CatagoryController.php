<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Catagory::get();
        return view('admin.catagory.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Catagory =new Catagory();
        $Catagory->title=$request->title;
        $Catagory->save();
        return back()->with('message','Add Successfull');

    }

    /**
     * Display the specified resource.
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagory $catagory)
    {
        //
    }
}
