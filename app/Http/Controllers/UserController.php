<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission\Models\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('haveaccess', 'user.index');
        $users = User::with('roles')->orderBy('id','Desc')->paginate(5);
        //return $users; 
        return view ('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess', 'user.create');
        
        //$this->authorize('haveaccess', 'user.create');
        $users = User::get();

        return view('user.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess', 'user.create');
        //dd($request);
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->estado = '0';
        $user->save();

        return redirect()->route('user.index')->with('status_success','Usuario creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //dd($user);
        $this->authorize('view', [$user, ['user.show','userown.show']]);
        $roles = Role::orderBy('name')->get();
        //return $roles;
        return view('user.view', compact('roles','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {   
        $this->authorize('update', [$user, ['user.edit','userown.edit']]);
        

        $roles = Role::orderBy('name')->get();
        //return $roles;
        return view('user.edit', compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', [$user, ['user.edit','userown.edit']]);
        $request->validate([
            'name'          => 'required|max:50|unique:users,name,'.$user->id,
            'email'          => 'required|max:50|unique:users,email,'.$user->id,
        ]);
            //dd($request->all());
            //dd($request['password']);
            //dd($user);
            //dd(Hash::make($request['password']));  
        $user->update($request->all());
        //$user->password = Hash::make($request['password']);
        //DB::select('update users set password = '.$user->password.'');
        
            $user->roles()->sync($request->get('roles'));

            $usuario = User::findOrFail($user->id);
            $usuario->password = Hash::make($request['password']);
            $usuario->save();
        return redirect()->route('user.index')->with('status_success','Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('haveaccess', 'user.destroy');
        $user->delete();
        return redirect()->route('user.index')->with('status_success','Usuario eliminado con éxito');
    }
}
