<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\People;

class PeopleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function list() {
        $people = People::all();
        return view('list-people', ['people'=>$people]);
    }

    public function add() {
        return view('create-people');
    }

    public function addPeople(Request $request) {
        $errors = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:people',
            'birth_year' => 'required|string|max:255',
            'eye_color' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'hair_color' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'mass' => 'required|string|max:255',
            'skin_color' => 'required|string|max:255',
            'homeworld' => 'string|max:255',
            'url' => 'required|string|max:255|unique:people',

        ]);

        if($errors->fails()){
            return redirect('/people/add')->withErrors($errors)->withInput();
        } else {
            People::create([
                'name' => $request['name'],
                'birth_year' => $request['birth_year'], 
                'eye_color' => $request['eye_color'], 
                'gender' => $request['gender'], 
                'hair_color' => $request['hair_color'],
                'height' => $request['height'],
                'mass' => $request['mass'],
                'skin_color' => $request['skin_color'],
                'homeworld' => $request['homeworld'],
                'url' => $request['url']
            ]);
            return redirect('/people');
        }
    }
}
