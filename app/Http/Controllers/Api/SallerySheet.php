<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SallerySheet as ModelsSallerySheet;
use Illuminate\Http\Request;

class SallerySheet extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        return ModelsSallerySheet::orderBy('created_at', 'desc')->get();
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
        return ModelsSallerySheet::updateOrCreate(['employee_id' => $request->employee_id,], [
            'bari_vara' => $request->bari_vara,
            'chikitsha' => $request->chikitsha,
            'employee_id' => $request->employee_id,
            'mul_beton' => $request->mul_beton,
            'name' => $request->name,
            'otiriktoBeton' => $request->otiriktoBeton,
            'podobi' => $request->podobi,
            'total' => $request->total
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
        $data = ModelsSallerySheet::find($id);
        $data->delete();
        return 'deleted';
    }
}