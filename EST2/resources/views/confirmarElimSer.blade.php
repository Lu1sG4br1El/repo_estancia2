@extends('layouts.appadmin')

@section('content')

<div class="container">
    <h1 class="text-center">Eliminar un servicio pagado</h1>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>El servicio sera eliminado solo si su estatus esta sin adeudo</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
    </div>
    <div class="card m-4">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i>Servicio: {{ $servicioid->servicio }}</h5>
        <div class="card-body">
            <p class="card-titulo fw-semibold">Estatus: {{ $servicioid->estatus }}</p>
        </div>
        <form action="{{ route('listaS.destroy', $servicioid->idS) }}" method="post">
            {!! method_field('DELETE') !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-outline-danger">Eliminar :3</button></form>
            <a href="{{ route('listaS.index') }}" class="btn btn-outline-danger">No eliminar D: <i class="bi bi-trash"></i></a>
    </div>
</div>
