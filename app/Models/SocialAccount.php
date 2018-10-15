<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class SocialAccount extends AppModel
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','provider_name', 'provider_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
