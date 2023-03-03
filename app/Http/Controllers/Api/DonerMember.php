<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DonerMember as ModelsDonerMember;
use Illuminate\Http\Request;

class DonerMember extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsDonerMember::orderBy('created_at', 'desc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return ModelsDonerMember::create([
            'duration' => $request->duration,
            'copil' => $request->copil,
            'daak' => $request->daak,
            'daak_perm' => $request->daak_perm,
            'date' => $request->date,
            'father_name' => $request->father_name,
            'fee' => $request->fee,
            'graam' => $request->graam,
            'graam_perm' => $request->graam_perm,
            'image' => $request->image,
            'jela' => $request->jela,
            'jela_perm' => $request->jela_perm,
            'mother_name' => $request->mother_name,
            'name' => $request->name,
            'occupation' => $request->occupation,
            'thana' => $request->thana,
            'thana_perm' => $request->thana_perm,
            'type' => $request->type,
            'nid_image' => $request->nid_image,
            'nid_no' => $request->nid_no,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelsDonerMember::find($id);
        $data->delete();
        return 'deleted';
    }
}