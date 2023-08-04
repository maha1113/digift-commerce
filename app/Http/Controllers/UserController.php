<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index',[
            "users" => $users
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'username' => ['required','string','max:255'],
            'email' => ['required', 'string'],
            'password' => ['required','integer'],
            'type' => ['required']
           ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->type = $request->type;
         $user->save();
        $flashMessage = 'created successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.users.index',[
          'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('dashboard.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $validator = $request->validate([
            'username' => ['required','string','max:255'],
            'email' => ['required', 'string'],
            'password' => ['required','integer'],
            'type' => ['required']
           ]);

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->type = $request->type;
         $user->save();
        $flashMessage = 'created successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = User::destroy($id);
        $flashMessage = 'deleted successfully';
        return redirect()->back()->with('flashMessage' , $flashMessage);
    }
}
