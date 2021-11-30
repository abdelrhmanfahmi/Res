<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{

    public function forget_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|exists:users',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::where('phone_number', $request->phone_number)->first();
        $confirm_code = mt_rand(4000, 9000);

        if ($user) {
            $user->update(['password_rest_code' => $confirm_code]);
            return response()->json(['message' => 'We have sent you a password confirmation code!', 'code' => $confirm_code]);
        }

        return response()->json(['message' => 'Phone number is not exits']);
    }

    public function verify_code(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|exists:users',
            'code' => 'required|string|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::where(['phone_number' => $request->phone_number, 'password_rest_code' => $request->code])
            ->first();

        if (!$user)
            return response()->json(['message' => 'Invalid code or phone number'], 401);

        return response()->json(['message' => 'Code is confirmed successfully'], 200);

    }

    public function reset_password(Request $request)
    {
        $update = User::where('phone_number', $request->phone_number)
            ->update(['password' => Hash::make($request->password)]);

        if (!$update) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, something went wrong.'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success, Your password has been changed.'
        ]);
    }


}
