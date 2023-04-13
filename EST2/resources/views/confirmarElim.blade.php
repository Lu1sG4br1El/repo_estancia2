@extends('layouts.appadmin')

@section('content')

<div class="container">
    <h1 class="text-center">Eliminar una solicitud de taller</h1>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Esta seguro de eliminar la solicitud de taller ?:v</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
    </div>
    <div class="card m-4">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i>Nombre del taller: {{ $tallerid->nombreT }}</h5>
        <div class="card-body">
            <p class="card-titulo fw-semibold">Docente: {{ $tallerid->docente }}</p>
            <p class="card-text fw-semibold">Dia y hora: {{ $tallerid->FyH }}</p>
        </div>
            <form action="{{ route('listaT.destroy', $tallerid->idT) }}" method="post">
            {!! method_field('DELETE') !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-outline-danger">Eliminar :3</button></form>
            <a href="{{ route('listaT.index') }}" class="btn btn-outline-danger">No eliminar D: <i class="bi bi-trash"></i></a>
    </div>
</div>
