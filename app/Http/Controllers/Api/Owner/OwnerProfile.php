<?php

namespace App\Http\Controllers\Api\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class OwnerProfile extends Controller
{

    public function get_user(Request $request)
    {

        $this->validate($request, [
            'token' => 'required'
        ]);


        $user = JWTAuth::authenticate($request->token);

        return response()->json($user, 200);
    }


}
