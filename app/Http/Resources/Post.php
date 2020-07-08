<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
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
            'category_id' => $this->category_id,
            'company_id' => $this->company_id,
            'title' => $this->title,
            'description' => $this->when($this->isDetail, $this->description),
            'salary' => $this->salary,
            'district' => $this->district,
            'city' => $this->city,
            'image' => $this->image,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'company' => $this->company,
            'category' => $this->category
        ];
    }
}
