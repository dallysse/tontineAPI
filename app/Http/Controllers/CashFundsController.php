<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCash_fundsRequest;
use App\Http\Requests\UpdateCash_fundsRequest;
use App\Models\Cash_funds;

class CashFundsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listCash_funds(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of Cash_funds',
                'data'=> Cash_funds::all()

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
    public function store(StoreCash_fundsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cash_funds $cash_funds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cash_funds $cash_funds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCash_fundsRequest $request, Cash_funds $cash_funds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cash_funds $cash_funds)
    {
        //
    }
}
