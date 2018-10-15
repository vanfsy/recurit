<?php

namespace App\Models;

use App\Models\User\User_tag;

class Tag extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type','valid_flag'
    ];

    protected $_title = ['タグ', 'Tags'];

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
        'type' => [
            'label' => 'タイプ',
            'type' => 'select',
            'values' => ['personal' => 'パーソナルタグ', 'interest' => '興味のある業界'],
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
        'name' => 'required|max:16|unique:tags',
        'valid_flag' => 'required', // dragon_valid_flag
        'type' => 'required', // dragon_valid_flag
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

    public function tag_users()
    {
        return $this->hasMany(User_tag::class);
    }

    public static function boot()
    {
        parent::boot();

        // Delete Relationship
        static::deleting(function($tag) {
            $tag->tag_users()->delete();
        });
    }
}
