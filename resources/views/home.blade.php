@extends('layouts.app')
<link rel="shortcut icon" href="../images/logo.png"/>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('¡Supérate! Universities') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingreso éxitoso - ¡Bienvenido!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<ol class="list-group list-group-numbered">
    <li class="list-group-item">Universidad Nueva San Salvador</li>
    <li class="list-group-item">Universidad Centroamericana José Simeón Cañas</li>
    <li class="list-group-item">Universidad Doctor José Matías Delgado</li>
    <li class="list-group-item">Universidad Cátolica de El Salvador</li>
    <li class="list-group-item">Universidad Albert Einsten</li>
    <li class="list-group-item">Universidad Don Bosco</li>
    <li class="list-group-item">Universidad Dr. Andrés Bello</li>
    <li class="list-group-item">Universidad Modular Abierta</li>
    <li class="list-group-item">Universidad Salvadoreña Alberto Masferrer</li>
    <li class="list-group-item">Universidad Politécnica</li>
    <li class="list-group-item">Universidad Panamericana</li>
    <li class="list-group-item">Universidad Francisco Gavidia</li>
    <li class="list-group-item">Universidad Pedagógica de El Salvador</li>
    <li class="list-group-item">Universidad de El Salvador</li>
    <li class="list-group-item">Universidad Autónoma de Santa Ana</li>
    <li class="list-group-item">ITCA FEPADE San Miguel</li>
    <li class="list-group-item">ITCA FEPADE La Unión</li>
    <li class="list-group-item">ITCA FEPADE Santa Tecla</li>
    <li class="list-group-item">UNIVO- Universidad de Oriente</li>
    <li class="list-group-item">Escuela de Comunicaciones Mónica Herrera</li>
    <li class="list-group-item">Escuela Superior de Economía y Negocios</li>
    <li class="list-group-item">Instituto Centro Cultural</li>
    </ol>  
@endsection
