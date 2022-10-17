<?php

namespace App\Service\Interfaces\impls;

use App\Models\Temps;
use App\Service\Interfaces\UserInterface;
use Carbon\Carbon;

class Users implements UserInterface
{

    public function isExist($user)
    {
        return Temps::where('user_id', '=', $user->id)->exists();
    }
    public function isExistByField($user, $fields)
    {
        return Temps::where('user_id', '=', $user->id)->where($fields['key'], '=', $fields['value'])->exists();
    }
    public function verifyOTP($code)
    {
        $user = auth('sanctum')->user();
        $data = [];
        $query = Temps::where('user_id', '=', $user->id)
            ->where('type', '=', 'otp')
            ->where('code', '=', $code);
        if (count($query->get()) > 0) {
            $checkexpired = $query->where('expired_at', '>=', Carbon::now())->get();
            if (count($checkexpired) > 0) {
                $query->delete();
                $data = [
                    'ok' => true,
                    'message' => 'Verified!'
                ];
            } else {
                $data = [
                    'ok' => false,
                    'message' => 'OTP has been expired!'
                ];
            }
        } else {
            $data = [
                'ok' => false,
                'message' => 'Invalid OTP!'
            ];
        }
        return $data;
    }
}
