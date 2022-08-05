@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>REGLAS DE ASIGNACIÓN</strong>
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
                        	<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
								<div class="dt-buttons">
								<a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Copy</span></a>
								<a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>CSV</span></a>
								<a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Excel</span></a>
								<a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>PDF</span></a>
								<a class="dt-button buttons-print" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Print</span></a>
								</div>
								<div id="DataTables_Table_1_filter" class="dataTables_filter">
								<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label>
								</div>
							</div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Periodo_id</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Código</th>
                                            <th>Reglas de asignación</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Periodo_id</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Código</th>
                                            <th>Reglas de asignación</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                @if (count($per_regla)>0)
				              	@foreach ($per_regla as $per_reglas)
				                <tr>
                                    
				                  <td>{{$per_reglas->period_id}}</td>
				                  <td>{{$per_reglas->nombre}}</td>
				                  <td>{{$per_reglas->descripcion}}</td>
                                  <td>{{$per_reglas->codigo}}</td>
                                  <td>{{$per_reglas->reglas_asignacion}}</td>
				                  <td>

                                    <div class="btn-group">

                                        {{--@can('view',[$user, ['user.show','userown.show']])--}}
                                        @can('haveaccess','rule.show') 
                                        <a href="{{ route('rule.show',[$per_reglas->period_id]) }}" class="btn btn-xs bg-brown" title="Ver"><b><i class="material-icons">folder_shared</i></b></a>
                                        @endcan
                                    </div>

                                    @can('haveaccess','rule.destroy') 
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('Seguro desea Eliminar Reglas de asignación..!');",
                                            'route' => ['rule.destroy', $per_reglas->period_id])) !!}
                                            {!! Form::button('<i class="material-icons">delete</i>', ['class' => 'btn btn-xs btn-danger', 'type'=>'submit']) !!}
                                        {!! Form::close() !!} 
                                        @endcan 

                                  </td>
				                </tr>
				                @endforeach
				                @else
				                	<tr>
					                  <td colspan="10" class="text-center">No se encontraron registros</td>
					                </tr>
				                @endif
                                        
                                    </tbody>
                                </table>
                                
                            </div>
             </div>
        </div>
    </div>
</div>

</section>

@endsection
