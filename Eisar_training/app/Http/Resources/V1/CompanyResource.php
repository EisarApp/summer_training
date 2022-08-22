<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return [
        //     'status' => 'true',
        //     'message' => null,
        //     'data' => [
        //         'id' => $this->id,
        //         'userId' => $this->user_id,
        //         'name' => $this->information->name,
        //         'email' => $this->information->email,
        //         'password' => $this->information->password,
        //         'gender' => $this->information->gender,
        //         'mobile' => $this->information->mobile,
        //         'isActive' => $this->information->is_active,
        //         'profilePicture' => $this->information->profile_picture,
        //         'header' => $this->header,
        //         'description' => $this->description,
        //         'domain' => $this->domain,
        //         'cityId' => $this->city_id,
        //         'regionId' => $this->region_id,
        //         'facilitySize' => $this->facility_size
        //     ]
        // ];
        return parent::toArray($request);
    }
}
