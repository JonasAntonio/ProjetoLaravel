<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UsersResource;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserApiController extends Controller
{

    public function userData($id) {
        return new UsersResource(User::find($id));
    }

    public function addUser(Request $req) {
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
    }

}