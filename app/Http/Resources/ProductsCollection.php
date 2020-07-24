<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($element){
            return [
                    "name" => $element->name,
                    "image" => $element->image_url,
                    "description" => $element->description,
                    "price" => $element->price,
                    "stock" => $element->stock,
               ];
            })
        ];
    }
}
