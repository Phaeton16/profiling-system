<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genders;
use App\Courses;

class StudentsController extends Controller
{
    public function index()
    {
        return view ('pages.students.index');
    }
    public function create()
    {
        $gender = Genders::all();
        $courses = Courses::all();

        return view ('pages.students.create')
        ->with('gender',$gender)
        ->with('courses',$courses);
    }
    public function store()
    {
        return view ('pages.students.store');
    }
    public function edit()
    {
        return view ('pages.students.edit');
    }
    public function update()
    {
        return view ('pages.stduents.update');
    }
    public function delete()
    {
        return view ('pages.students.delete');
    }
    
}
