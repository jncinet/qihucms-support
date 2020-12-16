<?php

namespace Qihucms\Supports;

use Illuminate\Support\Carbon;

class Age
{
    /**
     * 获取年龄
     *
     * @param $date
     * @return int
     */
    public static function get($date)
    {
        return Carbon::parse($date)->diffInYears();
    }
}