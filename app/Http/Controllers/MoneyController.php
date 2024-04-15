<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMoneyRequest;
use App\Http\Requests\UpdateMoneyRequest;
use App\Models\Money;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listMoney(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of money',
                'data'=> Money::all()

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
    public function store(StoreMoneyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Money $money)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Money $money)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMoneyRequest $request, Money $money)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Money $money)
    {
        //
    }
}
