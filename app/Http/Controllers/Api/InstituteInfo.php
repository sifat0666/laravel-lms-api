<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InstituteInfo as ModelsInstituteInfo;
use Illuminate\Http\Request;

class InstituteInfo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsInstituteInfo::orderBy('created_at', 'desc')->first();
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
        try {

            // $data = $request->validate([
            //     'academic_year_id' => 'required|string|max:255',
            //     'academic_year' => 'required|string|max:255',

            // ]);

            $x = ModelsInstituteInfo::updateOrCreate(['id' => 1], [
                'name' => $request->name,
                'address' => $request->address,
                'num' => $request->num,
                'graam' => $request->graam,
                'daak' => $request->daak,
                'thana' => $request->thana,
                'jela' => $request->jela,
                'ilhak' => $request->ilhak,
                'namea' => $request->namea,
                'addressa' => $request->addressa,
                'numa' => $request->numa,
                'graama' => $request->graama,
                'daaka' => $request->daaka,
                'thanaa' => $request->thanaa,
                'jelaa' => $request->jelaa,
                'ilhaka' => $request->ilhaka,
                'logo' => $request->logo,
                'najeme_talim_sign' => $request->najeme_talim_sign,
                'mumtamim_sign' => $request->mumtamim_sign,
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
        $data = ModelsInstituteInfo::find($id);
        $data->delete();
        return 'deleted';
    }
}