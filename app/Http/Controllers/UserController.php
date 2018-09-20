<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        $errors = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($errors->fails()){
            return redirect('create')->withErrors($errors)->withInput();
        } else {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect('/');
        }

        
    }

}
