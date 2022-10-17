<?php

namespace App\Http\Controllers;
use App\Models\AccountInformation;
use App\Service\Interfaces\UserInterface;
use Illuminate\Http\Request;

class AccountInfromationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'user_id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'postal_code'=>'required',
            'phone_number'=>'required'
        ]);
        $accountinfo = AccountInformation::created([
            'user_id'=>$data['user_id'],
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'address'=>$data['address'],
            'phonenumber'=>$data['phonenumber'],
            'postal_code'=>$data['postal_code']
        ]);
        return response([
            'message'=>'success',
            'ok'=>true,
            'data'=> $accountinfo
        ]);
    }
    public function verifyOTP(Request $request,UserInterface $userservice){
        $data = $request->validate([
            'code'=>'required'
        ]);
        return response($userservice->verifyOTP($data['code']));
    }
}
