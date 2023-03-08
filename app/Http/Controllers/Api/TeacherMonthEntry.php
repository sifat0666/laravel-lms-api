<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TeacherMonthEntry as ModelsTeacherMonthEntry;
use Illuminate\Http\Request;

class TeacherMonthEntry extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsTeacherMonthEntry::orderBy('created_at', 'desc')->get();
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
        return ModelsTeacherMonthEntry::updateOrCreate(['session' => $request->session], [
            'm1' => $request->m1,
            'm2' => $request->m2,
            'm3' => $request->m3,
            'm4' => $request->m4,
            'm5' => $request->m5,
            'm6' => $request->m6,
            'm7' => $request->m7,
            'm8' => $request->m8,
            'm9' => $request->m9,
            'm10' => $request->m10,
            'm11' => $request->m11,
            'm12' => $request->m12,

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
        $data = ModelsTeacherMonthEntry::find($id);
        $data->delete();
        return 'deleted';
    }
}