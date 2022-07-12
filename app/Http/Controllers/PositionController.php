<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Position;
use App\User;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Builder\items;


class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = User::find(1);
        //dd($user->id);
        $this->authorize('haveaccess', 'position.index');
        $positions = Position::where("user_id","=",Auth::user()->id)->orderBy('id','Desc')->paginate(5);
        //$positions = Position::where("user_id",Auth::user()->id)->where("estado",0)->orderBy('id','Desc')->paginate(5);
        //dd($positions);
        //return $positions; 
        return view ('position.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //DB::beginTransaction();
        //Gate::authorize('haveaccess', 'position.create');

        $position = new Position();
        $position->user_id = Auth::user()->id;
        $position->ref1 = 0;
        $position->nref1 = 0;
        $position->ref2 = 0;
        $position->nref2 = 0;
        $position->don1 = 0;
        $position->ndon1 = 0;
        $position->don2 = 0;
        $position->ndon2 = 0;
        $position->don3 = 0;
        $position->ndon3 = 0;
        $position->don4 = 0;
        $position->ndon4 = 0;
        $position->estado = 1;
        $position->save();

        $lastId = $position->id;
        $lastNom = $position->user->name;

        //dd($lastNom);

        $positionactualizar = Position::where("don1",0)->
                                        orWhere("don2",0)->
                                        orWhere("don3",0)->
                                        orWhere("don4",0)->
                                        orderBy('id')->first();

        $posicionnombre = Position::where("id",$lastId);
                                        

        if($positionactualizar->don1 == 0){
            $positionactualizar->don1 =$lastId;
            $positionactualizar->ndon1 =$lastNom;
            
            $positionactualizar->save();
            
        }else{
            if($positionactualizar->don2 == 0){
                $positionactualizar->don2 =$lastId;
                $positionactualizar->ndon2 =$lastNom;
                $positionactualizar->save();
            }else{
                if($positionactualizar->don3 == 0){
                    $positionactualizar->don3 =$lastId;
                    $positionactualizar->ndon3 =$lastNom;
                    $positionactualizar->save();
                }else{
                    $positionactualizar->don4 =$lastId;
                    $positionactualizar->ndon4 =$lastNom;
                    $positionactualizar->save();
                }

            }

        }
        
        
        
        return redirect()->route('position.index')->with('status_success','Posición creada con éxito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //$this->authorize('view', [$user, ['user.show','userown.show']]);
        $this->authorize('view', [$position, ['position.show','positionown.show']]);
        
        //$positions = Position::where("user_id","=",Auth::user()->id)->orderBy('id');
        //$positionpr = Position::where("id",$position->id)->first();
        $position1 = Position::where("id",$position->id)->first();
        $position2 = Position::where("ref1",$position->id)->
                                orWhere("ref2",$position->id)->first();

        $position3 = Position::where("don1",$position->id)->
                                orWhere("don2",$position->id)->
                                orWhere("don3",$position->id)->
                                orWhere("don4",$position->id)->first();


        //dd($position1->id);
        return view('position.view', compact('position1', 'position2', 'position3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //$this->authorize('update', [$user, ['user.edit','userown.edit']]);
        

        $positions = Position::orderBy('id')->get();
        //return $roles;
        return view('position.edit', compact('positions','user'));
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
    public function destroy(Position $position)
    {
        $this->authorize('haveaccess', 'position.destroy');
        $position->delete();
        return redirect()->route('position.index')->with('status_success','pOSICIÓN eliminada con éxito');
    }
}
