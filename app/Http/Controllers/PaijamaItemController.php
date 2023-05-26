<?php

namespace App\Http\Controllers;

use App\Models\PaijamaItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaijamaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PunjabiItem = PaijamaItem::get();
        return view('admin.paijama_item.index',compact('PunjabiItem'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.paijama_item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:paijama_items',
            'rate' => 'required',
        ]);

        $PunjabiItem = new PaijamaItem();
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
    public function show(PaijamaItem $paijamaItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaijamaItem $paijamaItem,$id)
    {
        $punjabi_item = PaijamaItem::where('id',$id)->first();
        return view('admin.paijama_item.edit',compact('punjabi_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', \Illuminate\Validation\Rule::unique('paijama_items')->ignore($id)],
            'rate' => 'required',
        ]);

        $PunjabiItem = PaijamaItem::findOrFail($id);
        $PunjabiItem->update_id = Auth::id();
        $PunjabiItem->title = $request->title;
        $PunjabiItem->rate = $request->rate;
        $PunjabiItem->update();
        return redirect()->route('Paijama_item_index')->with('message',"Edit Successfull");
  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $PunjabiItem = PaijamaItem::find($id);
        $PunjabiItem ->delete();
        return back()->with('message','Delete Successfull ');
    }
}
