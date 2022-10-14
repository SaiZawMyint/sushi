<?php

namespace App\Http\Controllers;
use App\Models\AccountInformation;
use Illuminate\Http\Request;

class AccountInfromation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
