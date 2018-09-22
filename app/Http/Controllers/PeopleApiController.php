<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use SWAPI\SWAPI;

class PeopleApiController extends Controller
{

    public function __construct() {
        
    }

    public function listAll() {
        return People::all();
    }

    public function peopleData($id) {
        return People::find($id);
    }

    public function addPeople() { 
        $swapi = new SWAPI;
        $person = new People();

        // Iterate through all pages of people
        do {
            if (!isset($people)) {
                $people = $swapi->characters()->index();
            } else {
                $people = $people->getNext();
            }

            foreach ($people as $p) {
                $person = [
                    'name' => $p->name, 
                    'birth_year' => $p->birth_year, 
                    'eye_color' => $p->eye_color, 
                    'gender' => $p->gender, 
                    'hair_color' => $p->hair_color,
                    'height' => $p->height,
                    'mass' => $p->mass,
                    'skin_color' => $p->skin_color,
                    'homeworld' => $p->homeworld->name,
                    'url' => $p->url,
                    'created_at' => $p->created,
                    'updated_at' => $p->edited
                ];
                People::create($person); //insert into database
            }
        } while ($people->hasNext());
    }

    public function orderByCollumn($order) {
        return People::orderBy($order)->get();
    }

    public function searchTerm($term) {
        return People::
            where('name', 'LIKE', "%$term%")
            ->orWhere('birth_year', 'LIKE', "%$term%")
            ->orWhere('eye_color', 'LIKE', "%$term%")
            ->orWhere('gender', 'LIKE', "%$term%")
            ->orWhere('hair_color', 'LIKE', "%$term%")
            ->orWhere('height', 'LIKE', "%$term%")
            ->orWhere('mass', 'LIKE', "%$term%")
            ->orWhere('skin_color', 'LIKE', "%$term%")
            ->orWhere('homeworld', 'LIKE', "%$term%")
            ->orWhere('url', 'LIKE', "%$term%")
            ->orWhere('created_at', 'LIKE', "%$term%")
            ->orWhere('updated_at', 'LIKE', "%$term%")
            ->get();
    }
    

}
