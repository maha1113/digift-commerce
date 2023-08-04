<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('products','user')->get();
        return view('dashboard.orders.index',[
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $orders = new Order();
        $orders->user = $request->user;
        $orders->product = $request->product;
        $orders->total = $request->total;
         $orders->save();
        $flashMessage = 'created successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('dashboard.orders.index',[
            "order" => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::findorFail($id);
        return view('dashboard.orders.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->user = $request->user;
        $order->product = $request->product;
        $order->total = $request->total;
         $order->save();
        $flashMessage = 'updated successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Order::destroy($id);
        $flashMessage = 'deleted successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }
}
