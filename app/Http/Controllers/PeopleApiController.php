<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use SWAPI\SWAPI;

class PeopleApiController extends Controller
{

    public function __construct() {
        
    }

    public function test() {
        $swapi = new SWAPI;

        // Iterate through all pages of people
        do {
            if (!isset($people)) {
                $people = $swapi->characters()->index();
            } else {
                // The getNext, getPrevious of Collection indicate whether more pages follow
                $people = $people->getNext();
            }

            foreach ($people as $person) {
                echo sprintf("%s %s\n", $person->homeworld->name, $person->name);
            }
        } while ($people->hasNext());

                
    }

    public function addPeople() { //getting from swapi-php library
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
                    'created' => $p->created,
                    'edited' => $p->edited
                ];
                People::create($person); //insert into database
            }
        } while ($people->hasNext());
    }


    /*
    public function addPeople() { getting from api link
        $json = file_get_contents("https://swapi.co/api/people/?format=json");
        /*
            This link https://swapi.co/api/people/?format=json 
            brings just 10 registers from SWAPI database
        
        $json_data = json_decode($json, true);

        $person = new People();

        for($i=0; $i<count($json_data["results"]); $i++){
            $person = [
                'name' => $json_data["results"][$i]["name"], 
                'birth_year' => $json_data["results"][$i]["birth_year"], 
                'eye_color' => $json_data["results"][$i]["eye_color"], 
                'gender' => $json_data["results"][$i]["gender"], 
                'hair_color' => $json_data["results"][$i]["hair_color"],
                'height' => $json_data["results"][$i]["height"],
                'mass' => $json_data["results"][$i]["mass"],
                'skin_color' => $json_data["results"][$i]["skin_color"],
                'homeworld' => $json_data["results"][$i]["homeworld"],
                'url' => $json_data["results"][$i]["url"],
                'created' => $json_data["results"][$i]["created"],
                'edited' => $json_data["results"][$i]["edited"]
            ];

            People::create($person);
        }
    }
    */
}
