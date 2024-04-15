<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReunionRequest;
use App\Http\Requests\UpdateReunionRequest;
use App\Models\Reunion;
use App\Models\Member;


class ReunionController extends Controller
{

    public function listMembers(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of members',
                'data'=> Member::all()

            ]);
        }catch(Exception $e){
            return response()->json($e);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function listReunions(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of Meeting',
                'data'=> Reunion::all()

            ]);
        }catch(Exception $e){
            return response()->json($e);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getReunion($id)
    {
        $reunion= Reunion::where("id", $id)->exists();
        if($reunion){
            return response()->json([
                'status_code'=>200,
                'status_message'=>' Reunion found',
                'data'=> Reunion::where("id", $id)->get()

            ]);
        }else{
            return response()->json([
                'status_code'=>404,
                'status_message'=>'no found',

            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReunionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reunion $reunion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reunion $reunion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReunionRequest $request, Reunion $reunion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reunion $reunion)
    {
        //
    }
}
