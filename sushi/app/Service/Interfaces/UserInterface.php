<?php
namespace App\Service\Interfaces;

interface UserInterface{
    public function isExist($user);
    public function isExistByField($user,$fields);
    public function verifyOTP($code);
}