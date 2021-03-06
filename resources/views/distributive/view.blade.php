@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>DETALLE DE DISTRIBUTIVOS CON SUSTENTANTES</strong>
                </h2>
                <br>
            <form action="{{route('distributive.store')}}" method="POST" enctype="multipart/form-data">
                @csrf  
                <input type="file" name="import_file" />
                <br>
                <button class="btn btn-primary" type="submit">Importar</button>
            </form>
            <br>
            @if (count($distributive)>0)
                <tr>
                    <a href="{{ route('asigne.show',[$distributive[0]->period_id]) }}" class="btn btn-xs bg-brown" title="Asignar"><b><i class="material-icons">folder_shared</i></b></a>
                </tr>
            @else
                <tr>
                    <td colspan="10" class="text-center">No se encontraron registros</td>
                </tr>
            @endif
            <br>
            @if (count($distributive)>0)
                <tr>
                <br>
                    <a href="{{ route('export.show',[$distributive[0]->period_id]) }}" class="btn btn-primary" title="exportar"><b><i class="material-icons">folder_shared</i></b></a>
                </tr>
            @else
                <tr>
                    <td colspan="10" class="text-center">No se encontraron registros</td>
                </tr>
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
                                            <th>C??dula</th>
                                            <th>Apellido</th>
                                            <th>Nombres</th>
                                            <th>Amie</th>
                                            <th>Laboratorio</th>
                                            <th>Asignatura</th>
                                            <th>Forma</th>
                                            <th>Sesi??n</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>C??dula</th>
                                            <th>Apellido</th>
                                            <th>Nombres</th>
                                            <th>Amie</th>
                                            <th>Laboratorio</th>
                                            <th>Asignatura</th>
                                            <th>Forma</th>
                                            <th>Sesi??n</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                @if (count($distributive)>0)
				              	@foreach ($distributive as $distributives)
				                <tr>
                                    
				                  <td>{{$distributives->cedula}}</td>
                                  <td>{{$distributives->apellidos}}</td>
                                  <td>{{$distributives->nombres}}</td>
                                  <td>{{$distributives->amie}}</td>
                                  <td>{{$distributives->laboratorio}}</td>
                                  <td>{{$distributives->asignatura}}</td>
                                  <td>{{$distributives->forma}}</td>
				                  <td>{{$distributives->sesion}}</td>
				                  
				                </tr>
				                @endforeach
				                @else
				                	<tr>
					                  <td colspan="10" class="text-center">No se encontraron registros</td>
					                </tr>
				                @endif
                                        
                                    </tbody>
                                </table>
                                                      
                                {{ $distributive->links() }}

                            <hr>
                                            
                                            <a href="{{ route('distributive.index') }}" class="btn btn-success">Regresar</a>
                                            
	
                            
             </div>
        </div>
    </div>
</div>

</section>

@endsection
