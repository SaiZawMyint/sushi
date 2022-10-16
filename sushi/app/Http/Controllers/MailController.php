<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use App\Service\Interfaces\KeyGenerate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendOTP(KeyGenerate $key,Request $request){

        $data = $request->validate([
            'to'=>'required'
        ]);

        $keycode = $key->verifyCode(5);

        $mailData = [
            'subject' => 'Account verification',
            'title' => 'Verify your account',
            'code' => $keycode
        ];

        Mail::to($data['to'])->send(new NotifyMail($mailData));

        return response([
            'ok'=> true,
            'message'=>'Verification code send successfully!',
            'code'=>$keycode
        ]);
    }
}
