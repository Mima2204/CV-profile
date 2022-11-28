<?php

namespace App\Http\Controllers;

use App\Models\education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
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
            'School_name' => 'required',
            'field_of_study' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_eind_date' => 'required',


        ]);

         $detail = new education();

         $detail->School_name = $request->input('School_name');
         $detail->field_of_study = $request->input('field_of_study');
         $detail->graduation_start_date = $request->input('graduation_start_date');
         $detail->graduation_eind_date =$request->input('graduation_eind_date');

        //  auth()->user()->education()->create($request->all());
         $detail->user_id = auth()->id();

         $detail->save();
         return redirect()->route('experience.create');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(education $education)
    {
        //
    }
}
