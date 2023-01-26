<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeesDetermination as ModelsFeesDetermination;
use Illuminate\Http\Request;

class FeesDetermination extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsFeesDetermination::orderBy('created_at', 'desc')->paginate(5);

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
        return ModelsFeesDetermination::create([
            // 'class_name' => $request->class_name,
            'academic_year' => $request->academic_year,
            'boy_resi_new' => $request->boy_resi_new,
            'boy_resi_old' => $request->boy_resi_old,
            'boy_unresi_new' => $request->boy_unresi_new,
            'boy_unresi_old' => $request->boy_unresi_old,
            'class_name' => $request->class_name,
            'fee_name' => $request->fee_name,
            'fee_type' => $request->fee_type,
            'girl_resi_new' => $request->girl_resi_new,
            'girl_resi_old' => $request->girl_resi_old,
            'girl_unresi_new' => $request->girl_unresi_new,
            'girl_unresi_old' => $request->girl_unresi_old,
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
        $data = ModelsFeesDetermination::find($id);
        $data->delete();
        return 'deleted';
    }
}