<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use SWAPI\SWAPI;

class PeopleApiController extends Controller
{

    public function __construct() {
        
    }

    public function listAll(){
        $json = file_get_contents("https://swapi.co/api/people/?format=json");
        $json_data = json_decode($json, true);
        $person = new People();
        /*for($i=0; $i<count($json_data["results"]); $i++){
            //var_dump($json_data["results"][$i]["url"]);
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
            var_dump($person);
        }
        /*while(next($json_data["results"][$i])){
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
        }
        */
        //return $person;
    }

    public function addPeople() {
        $json = file_get_contents("https://swapi.co/api/people/?format=json");
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
}
