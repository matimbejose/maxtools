<?php

namespace App\Http\Controllers;
use  App\Models\Student;
use Illuminate\Http\Request;
use auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Student.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view("Student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'subject'=> 'required',
            'totalpaid' =>  'required',
            'status' => 'required'  

        ]);

        $student = Student::create([
            'created_by' => auth::id(),
            'name' => $request->name,
            'subject'=> $request->subject,
            'totalpaid' =>  $request->totalpaid,
            'status' => $request->status
        ]);

        // if($student) {
        //     return response()->json(['sucess' => 'Adicionado com suceso']); 
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showStudent()
    {
        return response()->json(['students' => Student::where('status','REGULAR')->get()]);
    }

    public function showStudentN() {
       return response()->json(['students' => Student::where('status','NREGULAR')->get()]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Student.edit')->with('student', Student::find($id));
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
        $validatedData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'totalpaid' => 'required',
            'status' => 'required'
        ]);
        Student::find($id)->update($validatedData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        // if($student) {
        //     return response()->json(['sucess'=>'Removido com sucesso']);
        // }
    }
}
