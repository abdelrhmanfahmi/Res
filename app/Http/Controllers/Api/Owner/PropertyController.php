<?php

namespace App\Http\Controllers\Api\Owner;

use App\Models\Property;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UserTrait;
use App\Traits\PropertyTrait;

class PropertyController extends Controller
{

    use UserTrait, PropertyTrait;

    public function index(Request $request)
    {
        $user = $this->get_authenticated_user($request->token);
        return $user->own_properties()->get();
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->only($this->required_data());
        $validator = Validator::make($data, $this->rules());

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()]);
        }

        //Request is valid, create new property
        $user = $this->get_authenticated_user($request->token);
        $property = Property::create($data);

        \DB::table('property_requests')->insert([
            'user_id' => $user->id,
            'property_id' => $property->id,
            'status' => '0',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Property created successfully',
            'data' => $property
        ]);
    }

    public function show(Request $request, $property_id)
    {
        $user = $this->get_authenticated_user($request->token);
        $property = $user->own_properties()->find($property_id);

        if (!$property) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, property not found or you do not own this property.'
            ], 400);
        }

        return $property;
    }


    public function edit(Property $property)
    {
        //
    }


    public function update(Request $request, Property $property)
    {

        $data = $request->only($this->required_data());
        $validator = Validator::make($data, $this->rules());


        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()]);
        }

        $property->update($data);

        //Property updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Property updated successfully',
            'data' => $property
        ]);
    }

    public function destroy(Request $request, $property_id)
    {
        $user = $this->get_authenticated_user($request->token);
        $property = $user->own_properties()->find($property_id);

        if (!$property) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, property not found or you do not own this property.'
            ], 400);
        }
        $property->delete();

        return response()->json([
            'success' => true,
            'message' => 'Success, property has been deleted.'
        ]);

    }


}
