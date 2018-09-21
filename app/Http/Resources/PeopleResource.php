<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeopleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name, 
            'birth_year' => $this->birth_year, 
            'eye_color' => $this->eye_color, 
            'gender' => $this->gender, 
            'hair_color' => $this->hair_color,
            'height' => $this->height,
            'mass' => $this->mass,
            'skin_color' => $this->skin_color,
            'homeworld' => $this->homeworld,
            'url' => $this->url,
            'created' => $this->created,
            'edited' => $this->edited
        ];
    }
}
