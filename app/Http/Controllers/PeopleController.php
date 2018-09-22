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

    public function edit($id) {
        $person = People::findOrFail($id);
        return view('edit-people', compact('person'));
    }

    public function editPerson(Request $request, $id) {
        $person = People::find($id);
        $person->name = $request['name'];
        $person->birth_year = $request['birth_year'];
        $person->eye_color = $request['eye_color']; 
        $person->gender = $request['gender']; 
        $person->hair_color = $request['hair_color'];
        $person->height = $request['height'];
        $person->mass = $request['mass'];
        $person->skin_color = $request['skin_color'];
        $person->homeworld = $request['homeworld'];
        $person->url = $request['url'];
        $person->save();
        $message = $person->name." has been successfully edited";
        return redirect()->route('people')->with('message', $message);
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
            'url' => 'string|max:255|unique:people',
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
            $message = $request->name." has been successfully added";
        return redirect()->route('people')->with('message', $message);
        }
    }

    public function delete($id) {
        $person = People::find($id);
        

        $message = $person->name." has been successfully deleted";
        $person->delete();
        return redirect()->route('people')->with('message', $message);
    }
}