<?php

namespace App\Http\Controllers;

use App\Models\PunjabiItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PunjabiItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $PunjabiItem = PunjabiItem::get();
        return view('admin.punjabi_item.index',compact('PunjabiItem'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.punjabi_item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:punjabi_items',
            'rate' => 'required',
        ]);

        $PunjabiItem = new PunjabiItem();
        $PunjabiItem->user_id = Auth::id();
        $PunjabiItem->title = $request->title;
        $PunjabiItem->rate = $request->rate;
        $PunjabiItem->status = 1;
        $PunjabiItem->valid = 1;
        $PunjabiItem->save();
        return back()->with('message',"Add Successfull");

    }

    /**
     * Display the specified resource.
     */
    public function show(PunjabiItem $punjabiItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PunjabiItem $punjabiItem,$id)
    {
       $punjabi_item = PunjabiItem::where('id',$id)->first();
       return view('admin.punjabi_item.edit',compact('punjabi_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'title' => ['required|unique:punjabi_items'.$id,
            'title' => ['required', \Illuminate\Validation\Rule::unique('punjabi_items')->ignore($id)],
            'rate' => 'required',
        ]);

        $PunjabiItem = PunjabiItem::findOrFail($id);
        $PunjabiItem->update_id = Auth::id();
        $PunjabiItem->title = $request->title;
        $PunjabiItem->rate = $request->rate;
        $PunjabiItem->update();
        return redirect()->route('punjabi_item_index')->with('message',"Edit Successfull");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $PunjabiItem = PunjabiItem::find($id);
        $PunjabiItem ->delete();
        return back()->with('message','Delete Successfull ');
    }
}
