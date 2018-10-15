<?php

namespace App\Services;

use App\Models\User;

class UserService
{
//    public static function getList($type = null)
//    {
//        return User::where('type', $type)->where('valid_flag', 1)->orderBy('sort', 'asc')->pluck('name', 'id')
//            ->toArray();
//    }

    public static function checkRegister($user)
    {
        switch ($user->exam_status) {
            case 'check':
                return false;
                break;
            case 'recheck':
                return false;
                break;
            case 'done':
                return 'index';
                break;
            default :
                return true;
        }
    }

    public static function getList($conditions, $orders = array(), $user_type = null)
    {
        $userObj = new User();
        $criterias = $userObj->getSearchCriteria();

        // Display Normal Users
//        $user = User::where('valid_flag',1);
        $users = User::where('id' , '>', 0);
        if ($user_type) {
            $users = $users->where('type', $user_type);
        }


        // Search
        foreach($criterias as $field=>$criteria) {

            $type = $criteria['type'];
            if (!isset($conditions[$field])) continue;

            $value = $conditions[$field];

            if ($type == 'single') {
                if (is_array($value)) {
                    $users->whereIn($field, $value);
                } else {
                    $users->where($field, $value);
                }
            } elseif ($type == 'multiple') {
                $model = 'App\Models\User\User_' . $field;
                $modelObj = new $model();

                if (isset($criteria['additional_field']) && isset($criteria['additional_field_values'])
                    && is_array($criteria['additional_field_values'])) {

                    $additional_field = $criteria['additional_field'];
                    $additional_field_values = $criteria['additional_field_values'];

                    foreach ($additional_field_values as $additional_field_value) {
                        $modelObj = new $model();
                        $modelObj = $modelObj->where($additional_field, $additional_field_value);

                        $modelMaster = 'App\Models\\' . ucfirst($field);
                        $modelMasterObj = new $modelMaster();

                        $count = $modelMasterObj->whereIn('id', $value)
                            ->where($additional_field, $additional_field_value)->count();

                        if ($count) {
                            $users = self::getSearchMultiple($users, $modelObj, $field, $value);
                        }
                    }
                } else {
                    $users = self::getSearchMultiple($users, $modelObj, $field, $value);
                }

            }
        }

        $users = $users->get();

        return self::getsDetail($users);
    }

    public static function getDetail($user)
    {
        $new_users = User::all()->sortByDesc('updated_at')->pluck('id')->toArray();

        $user->gender_name = $user->gender == 1 ? '男性':'女性';
        if (in_array($user->id, $new_users)) {
            $user->new = 1;
        }
        return $user;
    }

    public static function getsDetail($users)
    {
        foreach ($users as $user)
        {
            $user = self::getDetail($user);
        }
        return $users;
    }

    protected static function getSearchMultiple($user, $modelObj, $field, $value)
    {

        $field_id = $field . '_id';

        if (is_array($value)) {
            $ids = $modelObj->whereIn($field_id, $value)->pluck('user_id')->toArray();
        } else {
            $ids = $modelObj->where($field_id, $value)->pluck('user_id')->toArray();
        }
        return $user->whereIn('id', $ids);
    }
}