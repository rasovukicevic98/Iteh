<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;




class AdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * 
     *
     */

    public static $wrap = 'ad';
    public function toArray($request)
    {
      //  return parent::toArray($request);
        return[
            'id'=>$this->resource->id,
            'headline'=>$this->resource->headline,
            'category'=>$this->resource->category,
            'slug'=>$this->resource->slug,
            'user'=>$this->resource->user,
           //  'user'=> new UserResource($this->resource->user_id),

        ];
    }
}
