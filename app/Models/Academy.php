<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    protected $table = 'academies';
    protected $_title = ['学歴', 'Academies'];
}
