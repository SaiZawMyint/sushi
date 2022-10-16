<?php

namespace App\Service\Interfaces\impls;

use App\Service\Interfaces\KeyGenerate;
class Keys implements KeyGenerate
{
    public function verifyCode($length)
    {
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= random_int(0,9)."";
        }
        return $code;
    }
}
