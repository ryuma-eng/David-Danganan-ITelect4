<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        $employees = employee::get();

        return view ('employee.index', compact('employees'));
    }

    public function create(){
        
        return view ('employee.create');
    }


    
    public function store(Request $request){
        $request->validate([
            'fname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'age' => 'required|max:255|string',
            'address' => 'required|max:255|string',
            'zip' => 'required|max:255|string',
        ]);


        //code for update
        // employee::findOrFail($id)->update($request->all());
        // return redirect ()->back()->with('status','Employee Updated Successfully!');
        employee::create($request->all());
        return view('employee.create');

            
    }




        
            

}
