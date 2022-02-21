<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SminkerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

         public function toArray($request)
         {
             return [
                 'ime'=>$this->resource->ime,
                 'prezime'=>$this->resource->prezime,
                 'brend'=>$this->resource->brend,
                 'cena'=>$this->resource->cena,
                 'grad'=>$this->resource->grad,
                         ];
         }
    }

