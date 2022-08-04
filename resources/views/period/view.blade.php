@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>DETALLE DEL PERIODO</strong>
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
                                            <label class="col-md-8 control-label" for="name">Id del periodo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="id" placeholder="Id del periodo" 
                                            name="id" value="{{ old('id', $period->id) }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
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
                                            name="nombre" value="{{ old('nombre', $period->nombre) }}" disabled>
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
                                            name="descripcion" value="{{ old('descripcion', $period->descripcion) }}" disabled>
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
                                            name="codigo" value="{{ old('codigo', $period->codigo) }}" disabled>
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
                                            <input type="text" class="form-control" 
                                            id="fecha_inicio_evaluacion" placeholder="Fecha inicio evaluación" 
                                            name="fecha_inicio_evaluacion" value="{{ old('fecha_inicio_evaluacion', $period->fecha_inicio_evaluacion) }}" disabled>
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
                                            <input type="text" class="form-control" 
                                            id="fecha_fin_evaluacion" placeholder="Fecha fin evaluación" 
                                            name="fecha_fin_evaluacion" value="{{ old('fecha_fin_evaluacion', $period->fecha_fin_evaluacion) }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                      


                            <hr>
                                            
                                            <a href="{{ route('period.index') }}" class="btn btn-success">Regresar</a>
                                            @can('view',[$period, ['period.edit','periodd.edit']])
                                            <a href="{{ route('period.edit', $period->id) }}" class="btn btn-primary">Editar</a>
                                            @endcan 
                            
             </div>
        </div>
    </div>
</div>

</section>

@endsection
