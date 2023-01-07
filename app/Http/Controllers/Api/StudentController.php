<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::orderBy('created_at', 'desc')->paginate(5);
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
            // $imageName = Str::random(32) . "." . $request->image->getClientOriginalExtension();

            //Create student
            $x = Student::create([
                'session' => $request->session,
                'class' => $request->class,
                'notun_puraton' => $request->notun_puraton,
                'student_id' => $request->student_id,
                'roll' => $request->roll,
                'gender' => $request->gender,
                'form_number' => $request->form_number,
                'abashik_onabashik' => $request->abashik_onabashik,
                'student_name' => $request->student_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'dob' => $request->dob,
                'nid_no' => $request->nid_no,
                'nationality' => $request->nationality,
                'blood_group' => $request->blood_group,
                'phn_no' => $request->phn_no,
                'perm_graam' => $request->perm_graam,
                'perm_daak' => $request->perm_daak,
                'perm_thana' => $request->perm_thana,
                'perm_jela' => $request->perm_jela,
                'graam' => $request->graam,
                'daak' => $request->daak,
                'thana' => $request->thana,
                'jela' => $request->jela,
                'comment' => $request->comment,
                // 'image' => $imageName
            ]);

            //save image
            // Storage::disk('public')->put($imageName, file_get_contents($request->image));
            return response()->json(['id' => $x->id], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'something went wrong',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return $student;
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
    public function update(Request $request, Student $student)
    {

        $imageName = Str::random(32) . "." . $request->image->getClientOriginalExtension();

        $student->update([
            'session' => $request->session,
            'class' => $request->class,
            'notun_puraton' => $request->notun_puraton,
            'student_id' => $request->student_id,
            'roll' => $request->roll,
            'gender' => $request->gender,
            'form_number' => $request->form_number,
            'abashik_onabashik' => $request->abashik_onabashik,
            'student_name' => $request->student_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'dob' => $request->dob,
            'nid_no' => $request->nid_no,
            'nationality' => $request->nationality,
            'blood_group' => $request->blood_group,
            'phn_no' => $request->phn_no,
            'perm_graam' => $request->perm_graam,
            'perm_daak' => $request->perm_daak,
            'perm_thana' => $request->perm_thana,
            'perm_jela' => $request->perm_jela,
            'graam' => $request->graam,
            'daak' => $request->daak,
            'thana' => $request->thana,
            'jela' => $request->jela,
            'comment' => $request->comment,
            'image' => $imageName
        ]);

        return new $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        return $student->delete();
    }
}