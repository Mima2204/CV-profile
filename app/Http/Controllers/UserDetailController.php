<?php

namespace App\Http\Controllers;

use App\Models\userDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $data = userDetail::get();
    return view('user-liste',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'adress' => 'required',
            'linkdin' => 'required',
            'description' => 'required',


        ]);

         $detail = new userDetail();

         $detail->fullname = $request->input('fullname');
         $detail->phone = $request->input('phone');
         $detail->email = $request->input('email');
         $detail->adress = $request->input('adress');
         $detail->linkdin =$request->input('linkdin');
         $detail->desciption =$request->input('description');
         $detail->user_id = auth()->id();
         $detail->save();




         return redirect()->route('education.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(userDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(userDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userDetail $userDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(userDetail $userDetail)
    {
        //
    }
}
