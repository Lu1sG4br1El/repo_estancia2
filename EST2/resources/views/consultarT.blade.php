@extends('layouts.appadmin')

@section('content')

<div class="container">
    <h1 class="text-center">Lista de talleres</h1>
    @foreach ($consultarTalleres as $buscarTaller)
    <div class="card m-4">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i>Nombre del taller: {{ $buscarTaller->nombreT }}</h5>
        <div class="card-body">
            <p class="card-titulo fw-semibold">Docente: {{ $buscarTaller->docente }}</p>
            <p class="card-text fw-semibold">Dia y hora: {{ $buscarTaller->FyH }}</p>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('listaT.edit', $buscarTaller->idT) }}" class="btn btn-outline-warning" class="btn btn-outline-warning">Editar <i class="bi bi-pencil"></i></a>
                <a href="{{ route('listaT.confirm', $buscarTaller->idT) }}" class="btn btn-outline-danger">Borrar <i class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
</div>

@endforeach