<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Rule;
use Illuminate\Support\Facades\DB;
use App\Imports\RulesImport;
use Maatwebsite\Excel\Facades\Excel;

class RuleController extends Controller
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

        $per_regla = DB::select('select * from fc_period_reglas');

        //DB::select($sql,array(1,20));
        //dd($dis_sus);

        return view ('rule.index', compact('per_regla'));
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
        $file = $request->file('import_file');
        //dd($file);
        //Excel::import(new DistributivesImport, $file);
        Excel::import(new RulesImport, $file);

        return redirect()->route('rule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Period $rule)
    {
        $rule = Rule::where('period_id','=',$rule->id)->paginate(20);
        
        //dd($rule);
        return view('rule.view', compact('rule'));
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
