@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>DETALLE DE REGLAS DE ASIGNACIÓN</strong>
                </h2>
                <br>
            @if (count($rule)>0)
                <strong>Reglas de Asignación Cargadas</strong>
            @else            
                <form action="{{route('rule.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    <input type="file" name="import_file" />
                    <br>
                    <button class="btn btn-primary" type="submit">Importar</button>
                </form>
            @endif
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
                            
            
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Periodo</th>
                                            <th>Asignatura</th>
                                            <th>Forma</th>
                                            <th>Fecha Inicio</th>
                                            <th>Sesion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Periodo</th>
                                            <th>Asignatura</th>
                                            <th>Forma</th>
                                            <th>Fecha Inicio</th>
                                            <th>Sesion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                @if (count($rule)>0)
				              	@foreach ($rule as $rules)
				                <tr>
                                    
				                  <td>{{$rules->period_id}}</td>
                                  <td>{{$rules->asignatura}}</td>
                                  <td>{{$rules->forma}}</td>
                                  <td>{{$rules->fecha}}</td>
                                  <td>{{$rules->sesion}}</td>
				                  
				                  
				                </tr>
				                @endforeach
				                @else
				                	<tr>
					                  <td colspan="10" class="text-center">No se encontraron registros</td>
					                </tr>
				                @endif
                                        
                                    </tbody>
                                </table>
                                                      
                                {{ $rule->links() }}

                            <hr>
                                            
                                            <a href="{{ route('rule.index') }}" class="btn btn-success">Regresar</a>
                                            
	
                            
             </div>
        </div>
    </div>
</div>

</section>

@endsection
