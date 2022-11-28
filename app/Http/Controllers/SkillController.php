<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;

class SkillController extends Controller
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
    public function create()
    {
        return view('skill.create');
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
            'name' => 'required',
            'rating' => 'required',

        ]);

         $detail = new skill();
         $detail->name = $request->input('name');
         $detail->rating = $request->input('rating');
         //  auth()->user()->education()->create($request->all());
         $detail->user_id = auth()->id();
         $detail->save();
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(skill $skill)
    {
        //
    }
}
