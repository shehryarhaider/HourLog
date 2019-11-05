<?php

namespace App\Http\Controllers;

use App\Phase;
use Illuminate\Http\Request;

class PhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hello";
        $phase = Phase::all();
        return view('phase',compact('phase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit = false;
        return view('add-phase',compact('isEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Phase::create($request->all());
        return redirect()->route('phases')->with('message','Phase Successfully Created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Phase $phase)
    {
        $find_phase = $phase;
        $isEdit = true;
        return view('add-phase',compact('find_phase','isEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phase $phase)
    {
        $phase->update($request->all());
        return redirect()->route('phases')->with('message','Phase Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phase $phase)
    {
        $delete = $phase->delete();
        if($delete)
        {
            return redirect()->route('phases')->with('message','Phase Successfully Deleted!');
        }
    }
}
