<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;



class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();
        // dd($data);
        return view ('pages.users.index', compact('data'));
        // return view ('pages.users.index');
    }
    public function create(){
        $data = User::all();
        

        return view ('pages.users.create', compact('data'));
        {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);
        }
    }
    public function store(Request $request)
    {
    //    dd($request->all());

        // User::create($request->all());
        
            User::create($request->all());

            session()->flash('save', 'Record Successfully Saved. ');
            return redirect()->route('users.list');
    
    }
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view ('pages.users.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        User::where('id', $id)->update($request->except(['_method','_token']));
        session()->flash('edit','Record Succesfully Edited. ');
        return redirect()->route('users.list');
    }
    public function destroy($id)
    {
        
        $data = User::findOrFail($id);
        $data->delete();
        session()->flash('edit','Record Succesfully Edited. ');
        return redirect()->route('users.list');
    }
    
}


