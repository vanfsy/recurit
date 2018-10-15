<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Company extends AppModel implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Notifiable, Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'companies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_img', 'manager_name', 'email', 'tel', 'area', 'exam_status', 'near_station', 'site', 'ticket', 'description', 'interview_content', 'valid_flag',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $_title = ['企業', 'Companies'];

    /**
     * Form field.
     *
     * @var array
     */
    protected $_forms = [
        'id' => [
            'label' => 'ID',
            'type' => 'hide', // for form
            'search' => true,
        ],
        'profile_img' => [
            'label' => 'プロフィール画像',
            'type' => 'file',
            'search' => false,
            'memo' => '変更する場合は新しくアップロードをしてください',
        ],
        'name' => [
            'label' => '会社名',
            'type' => 'text', // for form
            'search' => true,
        ],
        'manager_name' => [
            'label' => '担当者名',
            'type' => 'text', // for form
            'search' => true,
        ],
        'email' => [
            'label' => 'メールアドレス',
            'memo' => '入力したメールアドレスにメールが送信されます',
            'type' => 'text',
            'search' => true,
        ],
        'tel' => [
            'label' => '電話番号',
            'type' => 'text', // for form
            'search' => true,
        ],

        'exam_status' => [
            'label' => '登録状況',
            'type' => 'select',
            'values' => ['notyet' => '未提出', 'check' => '審査中', 'decline' => '却下', 'recheck' => '再審査中', 'done' => '合格'],
            'search' => true,
        ],
        'area' => [
            'label' => '所在地住所',
            'type' => 'text', // for form
            'search' => true,
        ],
        'near_station' => [
            'label' => '最寄駅',
            'type' => 'text', // for form
            'search' => true,
        ],

        'site' => [
            'label' => 'コーポレートサイトリンク',
            'type' => 'text', // for form
            'search' => true,
        ],

        'ticket' => [
            'label' => 'チケット',
            'type' => 'text', // for form
            'search' => true,
        ],

        'description' => [
            'label' => '会社紹介文',
            'type' => 'text', // for form
            'search' => true,
        ],

        'interview_content' => [
            'label' => 'インタビュー内容',
            'type' => 'text', // for form
            'search' => true,
        ],

        'valid_flag' => [
            'label' => 'ステータス',
            'type' => 'select',
            'values' => ['1' => '有効', '0' => '無効'],
            'search' => true,
        ],
    ];

    protected $_validates = [
        'profile_img' => 'sometimes|required|mimes:jpg,jpeg,png,gif',
        'name' => 'sometimes|required',
        'email' => 'sometimes|required|unique:users,deleted_at,NULL',
        'password' => 'sometimes|required',
        'manager_name' => 'sometimes|required',
        'tel' => 'sometimes|required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
        'area' => 'sometimes|required',
        'near_station' => 'sometimes|required',
        'description' => 'sometimes|required',
        'interview_content' => 'sometimes',
        'site' => 'sometimes|required',
        'valid_flag' => 'required',
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
            3 => ['action' => 'tmp', 'label' => '審査合格'],
        ],
        ],
    ];

    public function accounts()
    {
        return $this->hasMany('App\Models\SocialAccount');
    }

    public function majors()
    {
        return $this->belongsToMany(Major::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
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
