<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributive;
use App\Period;
use Illuminate\Support\Facades\DB;
use App\Imports\DistributivesImport;
use Maatwebsite\Excel\Facades\Excel;

class DistributiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Gate::authorize('haveaccess', 'role.index');
        //$distributives = Distributive::orderBy('id','Desc')->paginate(5);
        //$sql = "select * from fc_dist_sust";

        $dis_sus = DB::select('select * from fc_dist_sust');

        //DB::select($sql,array(1,20));
        //dd($dis_sus);

        return view ('distributive.index', compact('dis_sus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('import_file');
        //Excel::import(new DistributivesImport, $file);
        Excel::queueImport(new DistributivesImport, $file);

        return redirect()->route('distributive.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Period $distributive)
    {

        $distributive = Distributive::where('period_id','=',$distributive->id)->paginate(20);

        //dd($distributive);
        return view('distributive.view', compact('distributive'));
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
