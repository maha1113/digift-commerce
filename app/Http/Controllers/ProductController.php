<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
         'image' => ['nullable','image','mimes:jpg,jpeg,png','max:2048'],
         'name' => ['required','string','max:255'],
         'desc' => ['required', 'string'],
         'price' => ['required','integer']
        ]);
        $path = '';
        if($request->file('image')){
            $image = $request->file('image');
            $path = $image->store('product', 'public');

        }

        $products = new Product();
        $products->name = $request->name;
        $products->desc = $request->desc;
        $products->price = $request->price;
        $products->image = $path;
        $products->save();

        $flashMessage = 'created successfully';
        return redirect()->back()->with('flashMessage', $flashMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.products.index',[
          'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findorFail($id);
        return view('dashboard.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator = $request->validate([
            'image' => ['nullable','image','mimes:jpg,jpeg,png','max:2048'],
            'name' => ['required','string','max:255'],
            'desc' => ['required', 'string'],
            'price' => ['required','integer']
           ]);

        $path = $product->image;
        if($request->file('image')){
            $image = $request->file('image');
            $path = $image->store('product', 'public');

        }

        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->image = $path;
        $issaved = $product->save();

        $flashMessage = 'updated successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Product::destroy($id);
        $flashMessage = 'deleted successfully';
        return redirect()->back()->with('flashMessage', $flashMessage);
    }
}
