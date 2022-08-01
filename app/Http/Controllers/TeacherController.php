<?php
namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Teacher.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Teacher.create");
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
            'subject' => 'required',
            'lastvalue' => 'required',
            'status' => 'required'
        ]);

     $teacher = Teacher::create([
        'created_by' => auth::id(),
        'name' => $request->name,
        'subject' => $request->subject,
        'lastvalue' => $request->lastvalue,
        'status' => $request->status
     ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function showTeacher(Teacher $teacher)
    {
        return  response()->json(['teacher' => Teacher:: where('status', 'REGULAR')->get()]);
    }

    public function showTeacherN(Teacher $teacher) {
        return response()->json(['teacher' => Teacher::where('status', 'NREGULAR')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Teacher.edit')->with('teacher', Teacher::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'lastvalue' => 'required',
            'status' => 'required'
        ]);
        teacher::find($id)->update($validatedData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id)->delete();
    }
}
