<?php

namespace App\Models;

use App\Models\User\User_tag;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Validation\Rule;

class User extends AppModel implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Notifiable, Authenticatable, Authorizable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_img', 'nickname', 'tel', 'univ', 'hobby', 'graduate_year', 'gender', 'register_step', 'exam_status', 'gakubu', 'job_hunting', 'intern', 'area', 'major_id', 'auth01', 'auth02'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $_title = ['学生', 'Users'];

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
        'profile_img' => [
            'label' => 'プロフィール画像',
            'type' => 'file',
            'search' => false,
            'memo' => '変更する場合は新しくアップロードをしてください'
        ],
        'name' => [
            'label' => '氏名',
            'memo' => 'フルネームで記入',
            'type' => 'text', // for form
            'search' => true
        ],
        'nickname' => [
            'label' => 'ハンドルネーム',
            'type' => 'text', // for form
            'search' => true
        ],
        'email' => [
            'label' => 'メールアドレス',
            'memo' => '入力したメールアドレスにメールが送信されます',
            'type' => 'text',
            'search' => true
        ],
        'tel' => [
            'label' => '電話番号',
            'type' => 'text', // for form
            'search' => true
        ],
        /*        'password' => [
                    'label' => 'パスワード',
                    'type' => 'password',
                    'search' => false
                ],*/
        'exam_status' => [
            'label' => '審査状況',
            'type' => 'select',
            'values' => ['notyet' => '未提出', 'check' => '審査中', 'decline' => '却下', 'recheck' => '再審査中', 'done' => '合格'],
            'search' => true
        ],
        'univ' => [
            'label' => '学校名',
            'type' => 'text', // for form
            'search' => true
        ],
        'hobby' => [
            'label' => '趣味',
            'type' => 'text', // for form
            'search' => true
        ],
        'graduate_year' => [
            'label' => '卒業年度',
            'type' => 'text', // for form
            'search' => true
        ],
        'gender' => [
            'label' => '性別',
            'type' => 'select',
            'values' => [1 => '男性', 2 => '女性'],
            'search' => true
        ],
        'auth01' => [
            'label' => '本人確認書類１',
            'type' => 'file',
            'search' => false,
            'memo' => '変更する場合は新しくアップロードをしてください'
        ],
        'auth02' => [
            'label' => '本人確認書類２',
            'type' => 'file',
            'search' => false,
            'memo' => '変更する場合は新しくアップロードをしてください'
        ],
        'valid_flag' => [
            'label' => 'ステータス',
            'type' => 'select',
            'values' => ['1' => '有効', '0' => '無効'],
            'search' => true
        ],
    ];


    protected $_validates = [
        'name' => 'sometimes|required|max:50',
        'email' => 'sometimes|required|unique:users,deleted_at,NULL',
        'password' => 'sometimes|required',
        'profile_img' => 'sometimes|required|mimes:jpg,jpeg,png,gif',
        'nickname' => 'sometimes|required|max:50',
        'univ' => 'sometimes|required|max:50',
        'tel' => 'sometimes|required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
        'hobby' => 'sometimes|required|max:100',
        'graduate_year' => 'sometimes|required',
        'gender' => 'sometimes|required',
        'major_id' => 'sometimes|required',
        'interest' => 'sometimes|required|min:1|max:5',
        'personal' => 'sometimes|required|min:1|max:5',
        'area_tmp' => 'sometimes|required',
        'auth01' => 'sometimes|required',
        'auth02' => 'sometimes|required',
        'User_tag.*.tipo' => 'required',
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
            /*1 => ['action' => 'edit', 'label' => '編集'],*/
            2 => ['action' => 'destroy', 'label' => '削除'],
            3 => ['action' => 'tmp', 'label' => '審査合格'],
            4 => ['action' => 'check', 'label' => '再審査を依頼'],
        ]
        ]
    ];

    protected $_searchCriteria = [
        'gender' => [
            'type' => 'single',
        ],
        'major_id' => [
            'type' => 'single',
        ],
        'graduate_year' => [
            'type' => 'single',
        ],
        'tag' => [
            'type' => 'multiple',
            'additional_field' => 'type',
            'additional_field_values' => ['interest', 'personal'],
        ]

    ];

    public function getSearchCriteria()
    {
        return $this->_searchCriteria;
    }

    public function accounts()
    {
        return $this->hasMany('App\Models\SocialAccount');
    }

    public function majors()
    {
        return $this->belongsToMany(Major::class);
    }

    public function major()
    {
        return $this->belongsTo('App\Models\Major');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function personal_tags()
    {
        return $this->belongsToMany('App\Tag', 'personal_users', 'user_id', 'tag_id');
    }

    public function interest_tags()
    {
        return $this->belongsToMany('App\Tag', 'interest_users', 'user_id', 'tag_id');
    }

    public function tag_users()
    {
        return $this->hasMany(User_tag::class);
    }

    public static function boot()
    {
        parent::boot();

        // Delete Relationship
        static::deleting(function ($user) {
            $user->accounts()->delete();
        });
    }


}
