<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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

            'name' => $this->name,
            'slug' => $this->slug,
            'image' => url('/storage/departments/' . $this->image),
            'id' => $this->id,
            'can_be_accessed_by' => $this->can_be_accessed_by

        ];
    }
}