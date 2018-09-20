<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UsersResource;
use App\User;

class UserApiController extends Controller
{
    public function userData(){
        return new UserResource(Users::find($id));
    }
}
