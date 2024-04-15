<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHelpRequest;
use App\Http\Requests\UpdateHelpRequest;
use Illuminate\Http\Request;

use App\Models\Help;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listHelps(){
        try{
            return response()->json([
                'status_code'=>200,
                'status_message'=>'list of help',
                'data'=> Help::all()

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
            $help = new Help([
                'beneficiaire' => $request->input('beneficiaire'),
                'type_aide' => $request->input('type_aide')
            ]);
            $help->save();

            return response()->json('New help added!');

        } catch(\Exception $exception) {
            return response()->json($exception);
        }
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Help $help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Help $help)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHelpRequest $request, Help $help)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Help $help)
    {
        //
    }
}
