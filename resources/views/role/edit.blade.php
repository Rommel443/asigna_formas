@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2 class="card-inside-title">EDITAR INFORMACIÓN DEL ROL</h2>
        </div>
            <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('custom.message')

                <form action="{{ route('role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="card">
                        <div class="header">
                                <h2 class="card-inside-title">
                                    Ingresar datos
                                    
                                </h2>
                                
                        </div>
                        <div class="body">      
                        <div class="row clearfix">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Nombre del rol</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="name" placeholder="Nombre del rol" 
                                            name="name" value="{{ old('name', $role->name) }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row clearfix">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Slug</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="slug" placeholder="slug" 
                                            name="slug" value="{{ old('slug', $role->slug) }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Descripción del rol</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea  class="form-control" name="descripcion" id="descripcion" placeholder="descripción" rows="3" >{{ old('descripcion', $role->descripcion) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Full Access</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input  type="radio" id="fullaccessyes" 
                                            name="full-access" 
                                            class="custom-control-input" 
                                            value="yes"
                                            @if ( $role['full-access']=="yes")
                                            checked
                                            @elseif (old('full-access')=="yes")
                                            checked
                                            @endif
                                            >
                                            <label class="custom-control-label" for="fullaccessyes">Yes</label>

                                            <input  type="radio" id="fullaccessno" 
                                            name="full-access" 
                                            class="custom-control-input" 
                                            value="no" 
                                            @if ( $role['full-access']=="no")
                                            checked
                                            @elseif (old('full-access')=="no")
                                            checked
                                            @endif
                                            
                                            >
                                    <label class="custom-control-label" for="fullaccessno">No</label>
                                </div>
                                
                            </div>

                            <hr>

                            <h3>Lista de permisos</h3>

                            @foreach($permissions as $permission)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" 
                                    class="custom-control-input" 
                                    id="permission_{{ $permission->id }}"
                                    value="{{ $permission->id }}"
                                    name="permission[]"
                                    
                                    @if( is_array(old('permission')) && in_array("$permission->id", old('permission')) )
                                    checked
                                    
                                    @elseif( is_array($permission_role) && in_array("$permission->id", $permission_role) )
                                    checked
                                    @endif
                                    >
                                <label class="custom-control-label" 
                                for="permission_{{ $permission->id }}">
                                    {{ $permission->id }}
                                    -
                                    {{ $permission->name }}
                                    <em>( {{$permission->descripcion}} )</em>
                                </label>
                            </div>
                            @endforeach
                             
                            <hr>
                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>

                    </div>
                </form>    
            </div>
        </div>    
    </div> 
</section>
@endsection
