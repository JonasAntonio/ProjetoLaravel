<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class CreateUserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('create-user');
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
