<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Major extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'valid_flag'
    ];

    protected $table = 'majors';
    protected $_title = ['専攻', 'Majors'];

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
        'name' => [
            'label' => '氏名',
            'memo' => 'フルネームで記入',
            'type' => 'text', // for form
            'search' => true
        ],
        'valid_flag' => [
            'label' => 'ステータス',
            'type' => 'select',
            'values' => ['1' => '有効', '0' => '無効'],
            'search' => true
        ],
    ];

    protected $_validates = [
        'name' => 'required|max:16|unique:majors',
		'valid_flag' => 'required',
    ];

    protected $_tables = [
        'fields' => [
            'sort' => [
                'label' => 'ソート',
                'value' => 'sort',
                'class' => 'col-sm-1',
            ],
            'name' => [
                'label' => 'Name',
                'value' => 'name',
                'class' => 'col-sm-2',
            ]
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
        return $this->belongsToMany(User::class);
    }

    public function major_users()
    {
        return $this->hasMany(MajorUser::class);
    }

    public static function boot()
    {
        parent::boot();

        // Delete Relationship
        static::deleting(function($major) {
            $major->major_users()->delete();
        });
    }
}
