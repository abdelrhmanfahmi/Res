<?php

namespace App\Traits;

use Tymon\JWTAuth\Facades\JWTAuth;

trait UserTrait
{
    public function get_authenticated_user($token)
    {
        return JWTAuth::authenticate($token);
    }
}
