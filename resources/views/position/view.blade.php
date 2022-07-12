@extends('layouts.app')

@section('content')

<section class="content">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>DETALLE DE POSICIONES</strong>
                </h2>
                
            </div>
            <div class="body">
                    
                            <div class="table-responsive">
                            
                                <div class="organigrama">
                                    <ul>
                                        <li>
                                        <a href="#">{{ old('user_id', $position3->user->name) }}</a>
                                            <ul>
                                                <li><a href="#">{{ old('nref1', $position3->nref1) }}</a>
                                                <ul>
                                                    <li><a href="#">{{ old('ndon1', $position3->ndon1) }}</a>
                                                    <li><a href="#">{{ old('ndon2', $position3->ndon2) }}</a>
                                                </ul>
                                                </li>
                                                <li><a href="#">{{ old('nref1', $position3->nref2) }}</a>
                                                <ul>
                                                    <li><a href="#">{{ old('ndon3', $position3->ndon3) }}</a>
                                                    <li><a href="#">{{ old('ndon4', $position3->ndon4) }}</a>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            
                                <div class="organigrama">
                                    <ul>
                                        <li>
                                        <a href="#">{{ old('user_id', $position2->user->name) }}</a>
                                            <ul>
                                                <li><a href="#">{{ old('nref1', $position2->nref1) }}</a>
                                                <ul>
                                                    <li><a href="#">{{ old('ndon1', $position2->ndon1) }}</a>
                                                    <li><a href="#">{{ old('ndon2', $position2->ndon2) }}</a>
                                                </ul>
                                                </li>
                                                <li><a href="#">{{ old('nref1', $position2->nref2) }}</a>
                                                <ul>
                                                    <li><a href="#">{{ old('ndon3', $position2->ndon3) }}</a>
                                                    <li><a href="#">{{ old('ndon4', $position2->ndon4) }}</a>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="organigrama">
                                    <ul>
                                        <li>
                                        <a href="#">{{ old('user_id', $position1->user->name) }}</a>
                                            <ul>
                                                <li><a href="#">{{ old('nref1', $position1->nref1) }}</a>
                                                <ul>
                                                    <li><a href="#">{{ old('ndon1', $position1->ndon1) }}</a>
                                                    <li><a href="#">{{ old('ndon2', $position1->ndon2) }}</a>
                                                </ul>
                                                </li>
                                                <li><a href="#">{{ old('nref1', $position1->nref2) }}</a>
                                                <ul>
                                                    <li><a href="#">{{ old('ndon3', $position1->ndon3) }}</a>
                                                    <li><a href="#">{{ old('ndon4', $position1->ndon4) }}</a>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            <hr>
                            
                            <a href="{{ route('position.index') }}" class="btn btn-success">Regresar</a>
             </div>
        </div>
    </div>
</div>

</section>

@endsection
