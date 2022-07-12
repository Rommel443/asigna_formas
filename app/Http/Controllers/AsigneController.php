<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use Illuminate\Support\Facades\DB;

class AsigneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        $period = Period::where('id','=',$request)->paginate(20);
        //$per_regla = DB::select('select * from fc_period_reglas');
        dd($period);
        //return view ('rule.index', compact('per_regla'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($period_id)
    {
        //dd($period_id);
        $asigar = DB::select('select sp_asignar_formas('.$period_id.')');
        //$asigar = DB::select("select sp_asignar_formas($period_id)");
        //$asigar = DB::select('select sp_asignar_formas(', $period_id, ')');

        //DB::select($sql,array(1,20));
        //dd($dis_sus);

        return redirect()->route('distributive.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
