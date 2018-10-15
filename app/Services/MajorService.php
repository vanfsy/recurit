<?php

namespace App\Services;

use App\Models\Major;

class MajorService
{
    public static function getList()
    {
        return Major::where('valid_flag', 1)->orderBy('sort', 'asc')->pluck('name', 'id')->toArray();
    }
}