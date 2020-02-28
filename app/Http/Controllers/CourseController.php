<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class CourseController extends Controller
{
    public function index()
    {
        $data = Courses::all();
        return view('pages.courses.index', compact('data'));
        // return view('pages.courses.index');
    }

    public function create() 
    {
        return view('pages.courses.create');

    }

    public function store(Request $request) 
    {
        //data

        Courses::create($request->all());
        // dd($data);

        session()->flash('saved', 'Course is here!');
        return redirect()->route('courses.list');

    }

    public function edit($id) 
    {


    }
}
