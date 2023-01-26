<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MonthlyFee as ModelsMonthlyFee;
use Illuminate\Http\Request;

class MonthlyFee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsMonthlyFee::orderBy('created_at', 'desc')->paginate(100);
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
        // return ModelsMonthlyFee2::create();

        $data = [
            'class' => $request->class,
            'determined_fee' => $request->determined_fee,
            'discount' => $request->discount,
            'fee_name' => $request->fee_name,
            'month' => $request->month,
            'order_no' => $request->order_no,
            'receiver' => $request->receiver,
            'student_id' => $request->student_id,
            'student_name' => $request->student_name,
            'submitted_fee' => $request->submitted_fee,
            'submit_date ' => strval($request->submit_date)
        ];

        return ModelsMonthlyFee::updateOrCreate([['student_id' => $request->student_id, 'month' => $request->month]], $data);
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
        $data = ModelsMonthlyFee::find($id);
        $data->delete();
        return 'deleted';
    }
}