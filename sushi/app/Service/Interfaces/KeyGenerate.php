<?php
namespace App\Service\Interfaces;

interface KeyGenerate{
    public function verifyCode($length);
}