<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::with('products');
        return view('dashboard.stores.index',[
          'stores' =>   $stores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.stores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            // 'image' => ['nullable','image','mimes:jpg,jpeg,png','max:2048'],
            'name' => ['required','string','max:255'],
           ]);
        //    $path = '';
        //    if($request->file('image')){
        //        $image = $request->file('image');
        //        $path = $image->store('store', 'public');

        //    }

           $store = new Store();
           $store->name = $request->name;
        //    $store->image = $path;
           $store->save();

           $flashMessage = 'created successfully';
           return redirect()->back()->with('flashMessage', $flashMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        return view('dashboard.stores.index',[
           'store' => $store
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $store = Store::findorFail($id);
        return view('dashboard.stores.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {

        $validator = $request->validate([
            // 'image' => ['nullable','image','mimes:jpg,jpeg,png','max:2048'],
            'name' => ['required','string','max:255'],
           ]);
        //    $path = $store->image;
        //    if($request->file('image')){
        //        $image = $request->file('image');
        //        $path = $image->store('store', 'public');

        //    }

           $store->name = $request->name;
        //    $store->image = $path;
           $store->save();

           $flashMessage = 'created successfully';
           return redirect()->back()->with('flashMessage', $flashMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Store::destroy($id);
        $flashMessage = 'deleted successfully';
        return redirect()->back()->with('flashmessage' , $flashMessage);
    }
}
