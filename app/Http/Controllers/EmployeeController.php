<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Departement;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employee::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements= Departement::all();
        return view('employees.create',compact('departements'));// A RETENIR

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameE'=>'required',
            'age'=>'required',
            'dept_id'=>'required'

        ]);
        
        $employee= new employee([
            'nameE'=>$request->get('nameE'),
            'age'=>$request->get('age'),
            'dept_id'=>$request->get('dept_id'),

        ]);
        // dd($employee);
        $employee->save();
        return redirect('/employees');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee= Employee::find($id);
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nameE'=>'required',
            'age'=>'required',
            'dept_id'=>'required'

        ]);
        
        $employee= Employee::find($id);
        $departement->nameE=$request->get('nameE');
        $departement->age = $request->get('age');
        $departement->dept_id = $request->get('dept_id');
     
        $employee->save();
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee= Employee::find($id);
        $employee->delete();
        return redirect('/employees');
    }
}
