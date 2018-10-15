<?php

namespace App\Services;

use App\Models\Tag;
use App\Models\User\User_tag;

class TagService
{
    public static function getList($type = null, $user_id = null)
    {
        if (!empty($user_id)) {
            return User_tag::where('user_id', $user_id)
                ->pluck('tag_id')
                ->toArray();
        } else {
            return Tag::where('type', $type)
                ->where('valid_flag', 1)
                ->orderBy('sort', 'asc')
                ->pluck('name', 'id')
                ->toArray();
        }
    }
}