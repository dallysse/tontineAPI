<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\Request;


class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listExpenses(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of expense',
                'data'=> Expense::all()

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
            $expense = new Expense([
                'motif' => $request->input('motif'),
                'dateDepense' => $request->input('dateDepense'),
                'montant' => $request->input('montant')
            ]);
            $expense->save();

            return response()->json('New expense!');

        } catch(\Exception $exception) {
            return response()->json($exception);
        }    
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
