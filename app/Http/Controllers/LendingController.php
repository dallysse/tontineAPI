<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLendingRequest;
use App\Http\Requests\UpdateLendingRequest;
use App\Models\Lending;
use Illuminate\Http\Request;


class LendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listLendings(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of lending',
                'data'=> Lending::all()

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
    public function store(Request $request)
    {
        try {
            $lending = new Lending([
                'beneficiaire' => $request->input('beneficiaire'),
                'duree' => $request->input('duree'),
                'datePret' => $request->input('datePret'),
                'montant' => $request->input('montant')
            ]);
            $lending->save();

            return response()->json('New lending added!');

        } catch(\Exception $exception) {
            return response()->json($exception);
        }    
    }

    /**
     * Display the specified resource.
     */
    public function show(Lending $lending)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lending $lending)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLendingRequest $request, Lending $lending)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lending $lending)
    {
        //
    }
}
