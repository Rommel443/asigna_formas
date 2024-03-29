@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2 class="card-inside-title">CREAR PERIODO</h2>
        </div>
            <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('custom.message')

                <form action="{{ route('period.store') }}" method="POST">
                        @csrf
                        
                    <div class="card">
                        <div class="header">
                                <h2 class="card-inside-title">
                                    Ingresar datos
                                    
                                </h2>
                                
                        </div>
                        <div class="body">  
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Nombre</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="nombre" placeholder="Nombre" 
                                            name="nombre" value="{{ old('nombre')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Descripción</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="descripcion" placeholder="Descripción" 
                                            name="descripcion" value="{{ old('descripcion') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Código</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="codigo" placeholder="Codigo" 
                                            name="codigo" value="{{ old('codigo')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Fecha inicio evaluación</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="datetime-local" class="form-control" 
                                            id="fecha_inicio_evaluacion" placeholder="Fecha inicio evaluación" 
                                            name="fecha_inicio_evaluacion" value="{{ old('fecha_inicio_evaluacion') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Fecha fin evaluación</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="datetime-local" class="form-control" 
                                            id="fecha_fin_evaluacion" placeholder="Fecha fin evaluación" 
                                            name="fecha_fin_evaluacion" value="{{ old('fecha_fin_evaluacion') }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                </form>    
            </div>
        </div>    
    </div> 
</section>
@endsection
