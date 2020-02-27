<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genders;
use App\Courses;
use App\Level;
use App\Students;

class StudentsController extends Controller
{
    public function index()
    {
        $data = Students::all();
        return view ('pages.students.index', compact('data'));
    }
    public function create()
    {
        $gender = Genders::all();
        $courses = Courses::all();
        $level = Level::all();

        // dd($courses);

        return view ('pages.students.create',compact(['gender','courses', 'level']));
        // ->with('courses',$courses);
    }
    public function store(Request $request)
    {
    //    dd($request->all());

        Students::create($request->all());
        // $students = new Students();
        // $students->fname = $request->fname;
        // $students->mname = $request->mname;
        // $students->lname = $request->lname;
        // $students->gender_id = $request->gender_id;
        // $students->birth_date = $request->birth_date;
        // $students->course_id = $request->course_id;
        // $students->level_id = $request->level_id;
        // $students->stduent_id_number = $request->student_id_number;
        // $students_>save();

        // $data = array (
        //     'fname' => $request->fname,
        //     'mname' => $request->mname,
        //     'lname' => $request->lname,
        //     'gender_id;' => $request->gender_id,
        //     'birth_date' => $request->birth_date,
        //     'course_id' => $request->course_id,
        //     'level_id' => $request->level_id,
        //     'student_id_n;umber' => $request->student_id_number,
        // );

        // Students::create($data);


        session()->flash('save', 'Record Successfully Saved. ');
        return redirect('students.list');

    }
    public function edit($id)
    {
        $data = Students::findOrFail($id);
        return view ('pages.students.edit')
                ->with('data',$data);
    }
    public function update(Request $request,$id)
    {
        Students::where('id', $id)->update();
        session()->flash('edit','Record Succesfully Edited. ');
        return view ('pages.stduents.update');
        return redirect('Students-list');
    }
    public function delete($id)
    {
        $data = Students::findOFail($id);
        $data->delete();
        return view ('pages.students.delete');
    }
    
}
