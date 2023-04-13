@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Lista de servicios</h1>
    @foreach ($consultarServicios as $buscarServicio)
    <div class="card m-4">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i>Servicio: {{ $buscarServicio->servicio }}</h5>
        <div class="card-body">
            <p class="card-titulo fw-semibold">Estatus: {{ $buscarServicio->estatus }}</p>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('listaS.edit', $buscarServicio->idS) }}" class="btn btn-outline-warning" class="btn btn-outline-warning">Editar <i class="bi bi-pencil"></i></a>
                <a href="{{ route('listaS.confirm', $buscarServicio->idS) }}" class="btn btn-outline-danger">Borrar <i class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
</div>

@endforeach