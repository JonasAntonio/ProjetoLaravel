<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UsersResource;
use App\User;

class UserApiController extends Controller
{
    public function userData($id){
        return new UsersResource(User::find($id));
    }
}