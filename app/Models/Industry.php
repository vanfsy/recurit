<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    protected $table = 'industry';
    protected $_title = ['業界', 'Industry'];
}
