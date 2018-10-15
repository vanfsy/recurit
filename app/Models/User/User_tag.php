<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class User_tag extends Model
{
    //
    protected $table='tag_user';

    protected $fillable = [
        'type', 'tag_id', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    protected $_title = ['TagUser', 'TagUser'];

    /**
     * Form field.
     *
     * @var array
     */
    protected $_forms = [
        'id' => [
            'label' => 'ID',
            'type' => 'hide', // for form
            'search' => true
        ],
    ];

    protected $_validates = [
    ];

    protected $_tables = [
        'fields' => [
            'id' => [
                'label' => 'ID',
                'value' => 'id',
                'class' => 'col-sm-1',
            ],
            'name' => [
                'label' => 'Name',
                'value' => 'name',
                'class' => 'col-sm-2',
            ],
            'email' => [
                'label' => 'Email / Tel',
                'value' => ['email', 'tel'],
                'class' => 'col-sm-2',
            ],
        ],
        'actions' => ['content' => [
            0 => ['action' => 'show', 'label' => '詳細'],
            1 => ['action' => 'edit', 'label' => '編集'],
            2 => ['action' => 'destroy', 'label' => '削除'],
        ]
        ]
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
