<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee as ModelsEmployee;
use Illuminate\Http\Request;

class Employee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return ModelsEmployee::create([
            'daak' => $request->daak,
            'data_of_joining' => $request->data_of_joining,
            'employee_id' => $request->employee_id,
            'exp' => $request->exp,
            'father_name' => $request->father_name,
            'graam' => $request->graam,
            'jela' => $request->jela,
            'mother_name' => $request->mother_name,
            'passing_district' => $request->passing_district,
            'passing_year' => $request->passing_year,
            'position' => $request->position,
            'qualification' => $request->qualification,
            'reg_no' => $request->reg_no,
            'thana' => $request->thana,
            'type' => $request->type
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
        //
    }
}