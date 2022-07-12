@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>DETALLE DE USUARIOS</strong>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
            
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Nombre del usuario</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="name" placeholder="Nombre del usuario" 
                                            name="name" value="{{ old('name', $user->name) }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Correo Electrónico</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="email" placeholder="email" 
                                            name="email" value="{{ old('email', $user->email) }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label for="name">Rol del usuario</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select disabled class="form-control" name="roles" id="roles">
                                                @foreach($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    @isset($user->roles[0]->name)
                                                        @if($role->name == $user->roles[0]->name)
                                                            selected
                                                        @endif
                                                    @endisset
                                                >{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>

                                                      


                            <hr>
                                            
                                            <a href="{{ route('user.index') }}" class="btn btn-success">Regresar</a>
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Editar</a>
	
                            
             </div>
        </div>
    </div>
</div>

</section>

@endsection
