<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Audit as ModelsAudit;
use Illuminate\Http\Request;

class Audit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsAudit::orderBy('created_at', 'desc')->paginate(200);
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
        return ModelsAudit::create([
            'account_name' => $request->account_name,
            'ammount' => $request->ammount,
            'book' => $request->book,
            'chart_of_account' => $request->chart_of_account,
            'comment' => $request->comment,
            'fund_name' => $request->fund_name,
            'general_ledger' => $request->general_ledger,
            'particulars_detail' => $request->particulars_detail,
            'payment_system' => $request->payment_system,
            'sub_ledger' => $request->sub_ledger,
            'submit_date' => $request->submit_date,
            'submit_date_arabic' => $request->submit_date_arabic,
            'voucher_slip' => $request->voucher_slip,
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
        $data = ModelsAudit::find($id);
        $data->delete();
        return 'deleted';
    }
}