@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>LISTADO DE USUARIOS</strong>
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
								
								<a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Excel</span></a>
								
								</div>
								<div id="DataTables_Table_1_filter" class="dataTables_filter">
								<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label>
								</div>
							</div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Role(s)</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Role(s)</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                @if (count($users)>0)
				              	@foreach ($users as $user)
				                <tr>
                                    
				                  <td>{{$user->id}}</td>
				                  <td>{{$user->name}}</td>
				                  <td>{{$user->email}}</td>
				                  <td>@isset($user->roles[0]->name)
                                            {{ $user->roles[0]->name }}
                                        @endisset 
                                  </td>
				                  <td>

                                    <div class="btn-group">

                                        @can('view',[$user, ['user.show','userown.show']])
                                        <a href="{{ route('user.show',[$user->id]) }}" class="btn btn-xs bg-brown" title="Ver"><b><i class="material-icons">folder_shared</i></b></a>
                                        @endcan

                                        @can('view',[$user, ['user.edit','userown.edit']])
                                        <a href="{{ route('user.edit',[$user->id]) }}" class="btn btn-xs bg-teal" title="Editar"><b><i class="material-icons">create</i></b></a>
                                        @endcan 

                                    
                                        @can('haveaccess','user.destroy') 
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('Seguro desea Eliminar..!');",
                                            'route' => ['user.destroy', $user->id])) !!}
                                            {!! Form::button('<i class="material-icons">delete</i>', ['class' => 'btn btn-xs btn-danger', 'type'=>'submit']) !!}
                                        {!! Form::close() !!} 
                                        @endcan 

                                

                                    </div>

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
                                {{ $users->links() }}
                            </div>
             </div>
        </div>
    </div>
</div>

</section>

@endsection
