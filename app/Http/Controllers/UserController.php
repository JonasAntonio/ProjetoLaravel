<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('create-user');
    }

    public function list() {
        $users = User::all();
        return view('list-user', ['users'=>$users]);
    }

    protected function createUser(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/');
    }

}
