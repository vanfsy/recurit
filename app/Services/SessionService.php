<?php

namespace App\Services;

use App\Models\User;

class SessionService
{
    public static function getList($type = null)
    {
        return User::where('type', $type)->where('valid_flag', 1)->orderBy('sort', 'asc')->pluck('name', 'id')
            ->toArray();
    }

    public static function getSearch($user, $conditions)
    {
        
    }
}