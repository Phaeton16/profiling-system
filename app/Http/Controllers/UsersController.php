<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\email;
use App\password;

class UsersController extends Controller
{
    public function index()
    {
        $data = Users::get();
        // dd($data);
        return view ('pages.users.index', compact('data'));
    }
    public function create(){
        $email =Email::all();
        $password = Password::all();

        return view ('pages.users.create',compact(['email','password']));
        // ->with('courses',$courses);
        
    }
    public function store(Request $request)
    {
    //    dd($request->all());

        Users::create($request->all());

        session()->flash('save', 'Record Successfully Saved. ');
        return redirect()->route('users.list');

    }
    public function edit($id)
    {
        $data = Users::findOrFail($id);
        return view ('pages.users.edit')
                ->with('data',$data);
    }
    public function update(Request $request,$id)
    {
        Users::where('id', $id)->update();
        session()->flash('edit','Record Succesfully Edited. ');
        return view ('pages.users.update');
        return redirect('users.list');
    }
    public function delete($id)
    {
        $data = Students::findOFail($id);
        $data->delete();
        return view ('pages.users.delete');
    }
    
}


