<?php

namespace Qihucms\Supports;

class Num
{
    /**
     * 数字输出格式化
     *
     * @param $number
     * @return string
     */
    public static function unit($number)
    {
        $length = strlen($number);
        if ($length > 8) {
            // 亿单位
            return substr_replace(strstr($number, substr($number, -7), ' '), '.', -1, 0) . 'E';
        } elseif ($length > 4) {
            // 万单位
            // 保留两位小数
            return substr_replace(strstr($number, substr($number, -3), ' '), '.', -1, 0) . 'W';
        } else {
            return $number;
        }
    }
}