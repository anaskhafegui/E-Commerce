<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource; 

use Illuminate\Http\Resources\Json\JsonResource;


class ProductResource extends ProductIndexResource
{
    /**
     * @param
     * @return
     */
  
    public function toArray($request)
    {
        return array_merge(parent::toArray($request), [
            'variations' => [ProductVariationResource::collection($this->variations)]
            
        ]);
    }
}
