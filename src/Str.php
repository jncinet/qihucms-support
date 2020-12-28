<?php

namespace Qihucms\Support;

class Str
{
    public static function configEncode(string $str)
    {

    }

//
    public static function configDecode(string $str)
    {
        stripos($str, 'base64:') == 0
    }
}