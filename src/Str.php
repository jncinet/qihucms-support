<?php

namespace Qihucms\Support;

/**
 * Class Str
 * @package Qihucms\Support
 */
class Str
{
    /**
     * 是否包含汉字
     *
     * @param string $str
     * @return false|int
     */
    public static function includingChinese(string $str)
    {
        return preg_match("/([\x81-\xfe][\x40-\xfe])/", $str, $match);
    }

    /**
     * @param string $str
     * @return bool
     */
    public static function isEncoding(string $str): bool
    {
        return stripos($str, 'base64:') === 0;
    }

    /**
     * @param string $str
     * @return string
     */
    public static function encode(string $str): string
    {
        return 'base64:' . base64_encode($str);
    }

    /**
     * @param string $str
     * @return bool|string
     */
    public static function decode(string $str)
    {
        return self::isEncoding($str)
            ? base64_decode(str_replace('base64:', '', $str))
            : $str;
    }
}