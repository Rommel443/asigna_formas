@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2 class="card-inside-title">CREAR USUARIO</h2>
        </div>
            <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('custom.message')

                <form action="{{ route('user.store') }}" method="POST">
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
                                            <label class="col-md-8 control-label" for="name">Nombre del usuario</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="name" placeholder="Nombre del usuario" required
                                            name="name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Correo electrónico</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" 
                                            id="email" placeholder="email" required
                                            name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div>
                                            <label class="col-md-8 control-label" for="name">Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="password" class="form-control" 
                                            id="password" placeholder="password" required 
                                            name="password" value="{{ old('password') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            

                            

                                                        
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
