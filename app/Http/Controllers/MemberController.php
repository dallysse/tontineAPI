<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
     * Show the form for creating a new resource.
     */
    public function getMember($id)
    {
        $member= Member::where("id", $id)->exists();
        if($member){
            return response()->json([
                'status_code'=>200,
                'status_message'=>' member found',
                'data'=> Member::where("id", $id)->get()

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
    public function store()
    {
        $member = new Member();
        $member->nom = 'Chimene';
        $member->prenom = 'Chimene';
        $member->formation = 'Chimene';
        $member->date_naissance = '2024-03-11';
        $member->actif= 0;
        $member->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
