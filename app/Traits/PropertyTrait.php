<?php

namespace App\Traits;

trait PropertyTrait
{
    public function rules(): array
    {
        return [
            'property_name' => 'required',
            'property_number' => 'required',
            'description' => 'required',
            'street_name' => 'required',
            'street_NO' => 'required',
            'num_of_rooms' => 'required',
            'postcode' => 'required',
            'location' => 'required',
            'room_type' => 'required',
            'property_type' => 'required',
            'share_price' => 'required',
            'share_limit' => 'required',
            'dimensions' => 'required',
            'benefits' => 'required',
            'monthly_rent' => 'required',
            'yearly_rent' => 'required',
        ];
    }

    public function required_data(): array
    {
        return [
            'property_name',
            'property_number',
            'description',
            'street_name',
            'street_NO',
            'num_of_rooms',
            'postcode',
            'location',
            'room_type',
            'property_type',
            'share_price',
            'share_limit',
            'dimensions',
            'benefits',
            'monthly_rent',
            'yearly_rent',
        ];
    }
}
