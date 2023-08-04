<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wallet = Wallet::with('user')->get();
        return view('dashboard.wallet.index',[
            "wallet" => $wallet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $wallet = new Wallet();
        $wallet->username = $request->username;
        $wallet->total = $request->total;
         $wallet->save();
        $flashMessage = 'created successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallet)
    {
        return view('dashboard.wallet.index',[
            "wallet" => $wallet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $wallet = Wallet::findorFail($id);
        return view('dashboard.wallet.edit',compact('wallet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wallet $wallet)
    {

        $wallet->username = $request->username;
        $wallet->total = $request->total;
         $wallet->save();
        $flashMessage = 'updated successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Wallet::destroy($id);
        $flashMessage = 'deleted successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }
}
