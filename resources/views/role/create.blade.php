@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2 class="card-inside-title">CREAR ROL</h2>
        </div>
            <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('custom.message')

                <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        
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
                                            id="name" placeholder="Nombre del rol" required
                                            name="name" value="{{ old('name')}}">
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
                                            name="slug" value="{{ old('slug')}}"
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
                                            <textarea  class="form-control" name="descripcion" id="descripcion" placeholder="descripción" rows="3" >{{ old('descripcion')}}</textarea>
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
                                            value="yes" required
                                            
                                            >
                                            <label class="custom-control-label" for="fullaccessyes">Yes</label>

                                            <input  type="radio" id="fullaccessno" required
                                            name="full-access" 
                                            class="custom-control-input" 
                                            value="no" 
                                           
                                            
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
