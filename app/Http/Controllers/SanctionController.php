<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSanctionRequest;
use App\Http\Requests\UpdateSanctionRequest;
use App\Models\Sanction;

class SanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listSanctions(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of members',
                'data'=> Sanction::all()

            ]);
        }catch(Exception $e){
            return response()->json($e);
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
    public function store(StoreSanctionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sanction $sanction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sanction $sanction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSanctionRequest $request, Sanction $sanction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sanction $sanction)
    {
        //
    }
}
