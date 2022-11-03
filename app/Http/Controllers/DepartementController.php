<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Employee;


class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements= Departement::all();
       
        
        return view('departements.index',compact('departements'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departements.create');// A RETENIR
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
            'nameD'=>'required'
        ]);

        $departements= new departement([
            'nameD'=>$request->get('nameD'),
        ]);
        $departements->save();
        return redirect('/departements');

    }

  
    public function edit($id)
    {
        $departement= Departement::find($id);
        return view('departements.edit',compact('departement'));

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
            'nameD'=>'required'
        ]);

        $departement= Departement::find($id);
        $departement->nameD=$request->get('nameD');
        $departement->save();
        return redirect('/departements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement= Departement::find($id);
        $departement->delete();
        return redirect('/departements');
    }

    public function showAllEmp($id)
    {
        $departements= Departement::find($id);
        return view('departements.showAllEmp',compact('departements'));
    }
}
