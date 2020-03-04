<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genders;
use App\Courses;
use App\Level;
use App\Students;
use App\Address;
class StudentsController extends Controller
{
    public function index()
    {
        $data = Students::with(['getLevels','getCourses','getAddress'])->get();
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
        // ->with('courses',$courses);\

        
    }
    public function store(Request $request)
    {
    //    dd($request->all())
        $address= Address::create($request->except(['fname','mname','lname','gender_id','level_id','course_id','birth_date','student-id_number']));
        $request['address_id']=$address->id;
        Students::create($request->except(['purok','barangay','town','city','province','country']));
        
        session()->flash('save', 'Record Successfully Saved. ');
        return redirect()->route('students.list');

    }
    public function edit($id)   
    {
        $data = Students::findOrFail($id);
        $gender = Genders::all();
        $courses = Courses::all();
        $level = Level::all();
        // dd($data);
        return view ('pages.students.edit',compact(['data','gender','courses', 'level']));
    }
    public function update(Request $request, $id)
    {
        Students::where('id', $id)->update($request->except(['_method','_token']));
        session()->flash('edit','Record Succesfully Edited. ');
        return redirect()->route('students.list');
    }
    public function destroy($id)
    {
        $data = Students::findOrFail($id);
        $data->delete();
        session()->flash('edit','Record Succesfully Deleted. ');
        return redirect()->route('students.list');
    }
    
}
