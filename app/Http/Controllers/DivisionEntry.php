<?php

namespace App\Http\Controllers;

// use App\Models\DivisionEntry as ModelsDivisionEntry;

use App\Models\DivisionEntry as ModelsDivisionEntry;
use Illuminate\Http\Request;

class DivisionEntry extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsDivisionEntry::orderBy('created_at', 'desc')->paginate(5);

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
        return ModelsDivisionEntry::create([
            'case1' => $request->case1,
            'case1_div' => $request->case1_div,
            'case1_div_a' => $request->case1_div_a,
            'case2' => $request->case2,
            'case2_div' => $request->case2_div,
            'case2_div_a' => $request->case2_div_a,
            'case3' => $request->case3,
            'case3_div' => $request->case3_div,
            'case3_div_a' => $request->case3_div_a,
            'case4' => $request->case4,
            'case4_div' => $request->case4_div,
            'case4_div_a' => $request->case4_div_a,
            'case5' => $request->case5,
            'case5_div' => $request->case5_div,
            'case5_div_a' => $request->case5_div_a,
            'case6' => $request->case6,
            'case6_div' => $request->case6_div,
            'case6_div_a' => $request->case6_div_a,
            'class' => $request->class,
            'highest_mark' => $request->highest_mark,
            'note' => $request->note,
            'session' => $request->session,
            'exam_name' => $request->session,
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
        //
    }
}