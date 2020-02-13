<?php

namespace App\Http\Controllers;

use App\saiyan as Saiyan;
use Illuminate\Http\Request;

class saiyanController extends Controller
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
        return response()->json(Saiyan::all());
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
        $saiyan = Saiyan::create($request->all());
        return response()->json($saiyan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saiyan  $Saiyan
     * @return \Illuminate\Http\Response
     */
    public function show(Saiyan $saiyan)
    {
        return response()->json($saiyan);    
    }
        
    public function random() {
        return response()->json(Saiyan::all()->random(1)[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saiyan  $Saiyan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saiyan $saiyan)
    {
        $saiyan->update($request->all());
        return response()->json($saiyan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saiyan  $Saiyan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saiyan $saiyan)
    {
        Saiyan::destroy($saiyan->id);
        return response()->json($saiyan);
    }
}
