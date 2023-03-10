<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear as ModelsAcademicYear;
// use App\Models\AcademicYear as ModelsAcademicYear;
// use App\Models\AcademicYear as ModelsAcademicYear;
use Illuminate\Http\Request;

class AcademicYear extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsAcademicYear::orderBy('created_at', 'desc')->paginate(5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'academic_year_id' => 'required|string|max:255',
                'academic_year' => 'required|string|max:255',

            ]);

            $x = ModelsAcademicYear::updateOrCreate(['academic_year' => $request->academic_year], [
                'academic_year_id' => $request->academic_year_id,

                'bangla_year' => $request->bangla_year,
                'arabic_year' => $request->arabic_year,
                'id_card_issue' => $request->id_card_issue


            ]);
            return $x;

        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
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
        $data = ModelsAcademicYear::find($id);
        $data->delete();
        return 'deleted';
    }
}