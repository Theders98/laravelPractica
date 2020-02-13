<?php

namespace App\Http\Controllers;

use App\human as Human;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class humansController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() {
        $this->middleware('auth.role', ['only' => ['xd']]);
     }

    public function index()
    {
        return response()->json(Human::all());
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
        $human = Human::create($request->all());
        return response()->json($human);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\human  $human
     * @return \Illuminate\Http\Response
     */
    public function show(Human $human)
    {
        return response()->json($human);    
    }
        
    public function random() {
           
        return response()->json(Human::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\human  $human
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Human $human)
    {
        $human->update($request->all());
        return response()->json($human);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\human  $human
     * @return \Illuminate\Http\Response
     */
    public function destroy(Human $human)
    {
        Human::destroy($human->id);
        return response()->json($human);
    }

    public function xd(){

        return response()->json(Human::all());
    }
}
