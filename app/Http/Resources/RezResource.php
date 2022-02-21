<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     public static $wrap= 'rezervacija';
    public function toArray($request)
    {
        return [
'ime'=>$this->resource->ime,
'prezime'=>$this->resource->prezime,
'datum_zakazivanja'=>$this->resource->datum_zakazivanja,
'vreme'=>$this->resource->vreme,
'studio'=>$this->resource->studio,
'user_id'=>new UserResource($this->resource->user),
'sminker_id'=>new SminkerResource($this->resource->sminker),

        ];
    }
}
