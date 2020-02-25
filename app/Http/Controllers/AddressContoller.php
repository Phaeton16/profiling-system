<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressContoller extends Controller
{
    public function index()
    {
        $data = address::all();
        return view('pages.address.index');
    }
    
    public function create()
    {
        
        return view ('pages.address.create');
        // ->with('courses',$courses);
    }
    public function store(Request $request)
    {
    //    dd($request->all());

        Address::create($request->all());

        session()->flash('save', 'Record Successfully Saved. ');
        return redirect()->route('students.list');

    }
    public function edit($id)
    {
        $data = Address::findOrFail($id);
        return view ('pages.address.edit')
                ->with('data',$data);
    }
    public function update(Request $request,$id)
    {
        Address::where('id', $id)->update();
        session()->flash('edit','Record Succesfully Edited. ');
        return view ('pages.address.update');
        return redirect('students.list');
    }
    public function delete($id)
    {
        $data = Address::findOFail($id);
        $data->delete();
        return view ('pages.address.delete');
    }

}
