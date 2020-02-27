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
        $data = Students::with(['getLevels','getCourses'])->get();
                        // ->with('courses')
                        // ->get();
        // dd($data);
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

        session()->flash('save', 'Record Successfully Saved. ');
        return redirect()->route('students.list');

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
        return redirect('students.list');
    }
    public function delete($id)
    {
        $data = Students::findOFail($id);
        $data->delete();
        return view ('pages.students.delete');
    }
    
}
