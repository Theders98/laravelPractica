<?php

namespace App\Http\Controllers;

use App\villan as Villan;
use Illuminate\Http\Request;

class villansController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct() {
    //     $this->middleware('auth:api');
    // }

    public function index()
    {
        return response()->json(Villan::all());
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
            'id' => 'required',
        ]);
        $villan = Villan::create($request->all());
        return response()->json($villan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villan  $Villan
     * @return \Illuminate\Http\Response
     */
    public function show(Villan $Villan)
    {
        return response()->json($Villan);    
    }
        
    public function random() {
        return response()->json(Villan::all()->random(1)[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Villan  $Villan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villan $Villan)
    {
        $villan->update($request->all());
        return response()->json($villan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Villan  $Villan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villan $villan)
    {
        Villan::destroy($villan->id);
        return response()->json($villan);
    }
}
