<?php

namespace App\Http\Controllers\Api\Owner;

use App\Models\Owner;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'dob' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        try {
            $user = User::create([
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => User::PROP_OWNER, // manual 4 now
            ]);

            Owner::create([
                'user_id' => $user->id,
                'full_name' => $request->full_name,
                'dob' => $request->dob,
                'serial_id' => $request->serial_id,
            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return response()->json(['message' => 'Registered successfully'], 200);

    }


}
