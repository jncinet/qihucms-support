<?php

namespace Qihucms\Support;

class Mobile
{
    /**
     * 验证是否手机号码
     *
     * @param $mobile
     * @return false|int
     */
    public static function check($mobile)
    {
        return preg_match("/^1[345789]\d{9}$/", $mobile);
    }
}