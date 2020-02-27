<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $data = Courses::with(['getCourses'])

        return view('pages.courses.index', compact('data'));
    }

    public function create() 
    {
        return view('pages.courses.create');

        $data = Courses::all();

    

    }

    public function store(Request $request) 
    {
        //data

        Students::create($request->all());

        session()->flash('saved', 'Course is here!');
        return redirect()->route('courses.list');

    }

    public function edit($id) 
    {


    }
}
