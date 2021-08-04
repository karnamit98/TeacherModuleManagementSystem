<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Faculty;
use App\Models\Module;
use App\Http\Controllers\TaughtModuleController;

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
            //'modules' => 'required',
        ]);

        //dd($request);

        //Add Teacher to the DB table
        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->nationality = $request->nationality;
        $teacher->gender = $request->gender;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->phone = $request->phone;
        $teacher->dob = $request->dob;
        $teacher->faculty_id = $request->faculty;

        //dd($request->modules);
        if($teacher->save()){
            $teacherId = (Teacher::latest()->first())->id;        //Get the latest inserted record's id

            $taughtModuleController = new TaughtModuleController;
            //Add associated modules
            foreach($request->modules as $module)
            {
                //var_dump("module:".$module);
                $taughtModuleController->store($teacherId, $module);
            }
        } 
        
        
        //$teacherId = $teacher->id();

        

        return redirect()->route('home');
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
