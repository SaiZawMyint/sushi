<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use App\Models\Temps;
use App\Service\Interfaces\KeyGenerate;
use App\Service\Interfaces\UserInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendOTP(KeyGenerate $key, UserInterface $userservice, Request $request)
    {

        $data = $request->validate([
            'to' => 'required'
        ]);

        $keycode = $key->verifyCode(5);

        $mailData = [
            'subject' => 'Account verification',
            'title' => 'Verify your account',
            'code' => $keycode
        ];

        Mail::to($data['to'])->send(new NotifyMail($mailData));
        $u = auth('sanctum')->user();
        $exist = $userservice->isExistByField($u, [
            'key' => 'type',
            'value' => 'otp'
        ]);
        if ($exist) {
            Temps::where('user_id', $u->id)->where('type', 'otp')->update([
                'type' => 'otp',
                'expired_at' => Carbon::now()->addMinute(5),
                'code' => $keycode
            ]);
        } else {
            Temps::create([
                'user_id' => $u->id,
                'type' => 'otp',
                'expired_at' => Carbon::now()->addMinute(5),
                'code' => $keycode
            ]);
        }
        return response([
            'ok' => true,
            'message' => 'Verification code send successfully!'
        ]);
    }
}
