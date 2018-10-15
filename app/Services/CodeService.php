<?php
/**
 * Created by PhpStorm.
 * User: E
 * Date: 10/8/2018
 * Time: 4:41 AM
 */

namespace App\Services;


use App\Models\Major;
use App\Models\Tag;
use App\Models\Academy;
use phpDocumentor\Reflection\Types\Self_;

class CodeService
{
    public static $_graduate_years = [
        '19' => '19卒（4年生）',
        '20' => '20卒（3年生）',
        '21' => '21卒（2年生）',
        '22' => '22卒（1年生）',
    ];

    public static $_gender = [
        '1' => '男性',
        '2' => '女性',
    ];

    public static $_job_hunting = [
        '1' => 'しない',
        '2' => 'まだしていない',
        '3' => '活動中',
        '4' => '終了',
    ];

    public static $_intern = [
        '1' => '長期',
        '2' => '短期',
        '3' => '探してない',
    ];

    public static function getStudentCodes()
    {
        $codes = array(
            'graduate_years' => self::$_graduate_years,
            'gender' => self::$_gender,
            'major' => Major::where('valid_flag', 1)->get(),
            'job_hunting' => self::$_job_hunting,
            'intern' => self::$_intern,
        );

        return $codes;
    }

    public static function getSearchCodes()
    {
        $codes = array(
            'academies' => Academy::all(),
            'graduate_years' => self::getGraduateYears(),
            'gender' => self::$_gender,
            'major' => Major::where('valid_flag', 1)->get(),
            'industry_tags' => Tag::where('type', 'interest')->get(),
            'personal_tags' => Tag::where('type', 'personal')->get(),
        );

        return $codes;
    }

    protected static function getGraduateYears()
    {
        $year = date('Y');
        $ret = array();
        for ($i = $year + 4; $i > $year; $i--) {
            $ret[$i] = ($year + 5 - $i) . '年生';
        }
        return $ret;
    }
}