@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>LISTADO DE POSICIONES</strong>
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
                    @can('haveaccess','position.create')
                            <a href="{{ route('position.create') }}"
                                class="btn btn-primary float-right"
                                >Nueva Posición
                            </a>
                            <br><br>
                        @endcan
                    @include('custom.message')
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User_id</th>
                                            <th scope="col">Recibe</th>
                                            <th scope="col">Ref1</th>
                                            <th scope="col">Ref2</th>
                                            <th scope="col">Don1</th>
                                            <th scope="col">Don2</th>
                                            <th scope="col">Don3</th>
                                            <th scope="col">Don4</th>
                                            <th scope="col">Acción</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User_id</th>
                                            <th scope="col">Recibe</th>
                                            <th scope="col">Ref1</th>
                                            <th scope="col">Ref2</th>
                                            <th scope="col">Don1</th>
                                            <th scope="col">Don2</th>
                                            <th scope="col">Don3</th>
                                            <th scope="col">Don4</th>
                                            <th scope="col">Acción</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                @if (count($positions)>0)
                                @foreach($positions as $position)
                                <tr>
                                    <th scope="row">{{ $position->id }}</th>
                                    <td>{{ $position->user->name }}</td>
                                    
                                    <td>{{ $position->recibe }}</td>
                                    <td>{{ $position->ref1 }}</td>
                                    <td>{{ $position->ref2 }}</td>
                                    <td>{{ $position->don1 }}</td>
                                    <td>{{ $position->don2 }}</td>
                                    <td>{{ $position->don3 }}</td>
                                    <td>{{ $position->don4 }}</td>
                                    <td>
                                    
                                    @can('view',[$position, ['position.show','positionown.show']])
                                        <a href="{{ route('position.show',[$position->id]) }}" class="btn btn-xs bg-brown" title="Ver">
                                            <b>
                                                <i class="material-icons">folder_shared</i>
                                            </b>
                                        </a>
                                        @endcan

                                        @can('haveaccess','position.edit') 
                                        <a href="{{ route('position.edit',[$position->id]) }}" class="btn btn-xs bg-teal" title="Editar"><b><i class="material-icons">create</i></b></a>
                                        @endcan 

                                    
                                        @can('haveaccess','position.destroy') 
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('Seguro desea Eliminar..!');",
                                            'route' => ['position.destroy', $position->id])) !!}
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
                                {{ $positions->links() }}
                            </div>
             </div>
        </div>
    </div>
</div>

</section>

@endsection
