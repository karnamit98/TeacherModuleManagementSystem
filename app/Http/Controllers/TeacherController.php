<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Faculty;
use App\Models\Module;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Gets teachers objects (1 at a time) with associated faculty and modules names
        $teachers = Teacher::with('faculty')->with('taughtModules.module')->paginate(1);

        //dd($teachers);
        return view('showData', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::with('modules')->get();
        //dd($faculties);
        return view('addLecturer', ['faculties' => $faculties]);
    }


   

    /**
     * Modules belonging to a faculty
     */
    public function associatedFacultyModules($id)
    {
        $module = Module::where('faculty_id',$id)->get();
        return response()->json($module);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validations
        $validated = $request->validate([
            'name' => 'required|max:255',
            'nationality' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'dob' => 'required|date',
            'faculty' => 'required',
            'modules' => 'required',
        ]);

        dd('validation success!!');

        return 'validation success!';
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
