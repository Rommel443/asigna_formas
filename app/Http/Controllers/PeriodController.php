<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('haveaccess', 'user.index');
        $periods = Period::orderBy('id','Desc')->paginate(5);
        //return $users; 
        return view ('period.index', compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Gate::authorize('haveaccess', 'role.create');
        $periods = Period::get();
        //dd($periods);
        return view('period.create', compact('periods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Gate::authorize('haveaccess', 'role.create');
        $request->validate([
            'nombre'          => 'required|max:50|unique:periods,nombre',
            'descripcion'          => 'required|max:50|unique:periods,descripcion'
        ]);

        $period = Period::create($request->all());
        
        //if($request->get('permission')){
            //return $request->all();
            //$role->permissions()->sync($request->get('permission'));
        //}
        return redirect()->route('period.index')->with('status_success','Periodo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        //dd($period->id);
        //$this->authorize('view', [$user, ['user.show','userown.show']]);
        //$period = Period::orderBy('nombre')->get();
        //return $roles;
        //dd($period);
        return view('period.view', compact('period'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Period $period)
    {
        //$this->authorize('update', [$user, ['user.edit','userown.edit']]);
        

        //$period = Period::orderBy('nombre')->get();
        //return $roles;
        return view('period.edit', compact('period'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period)
    {
        $request->validate([
            'nombre'          => 'required|max:50|unique:periods,nombre,'.$period->id,
            'descripcion'          => 'required|max:50|unique:periods,descripcion,'.$period->id,
        ]);
            //dd($request->all());
        $period->update($request->all());
        
        
            //$user->roles()->sync($request->get('roles'));
        
        return redirect()->route('period.index')->with('status_success','Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
