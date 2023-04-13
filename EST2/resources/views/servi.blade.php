@extends('layouts.app')

@section('content')
@if(session()->has('confirmacion'))
{!! "<script> Swal.fire('Listo','Los datos se han guadado correctamente', 'success') </script>"!!}
<div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
    <strong>{{session('confirmacion')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are ADMIN!') }}
                </div>
                @if($errors->any())
	            @foreach($errors->all() as $error)
	            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
	                <strong>Complete el formulario >:c  </strong>{{$error}}
	                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	            </div>
	            @endforeach
                @endif
                <h1 class="text-center">Servicios estudiantiles</h1>
                    <div>
                        <form method="post" action="{{ route('listaS.store') }}">
                            @csrf
                    <div class="mb-3">
                        <label class="form-label text-center text-dark" name="labelServi">Servicio: </label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtServe" value="{{old('txtServe')}}">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="ADEUDO">ADEUDO</option>
                            <option value="CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL - $643.00">CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL - $643.00</option>
                            <option value="CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 2 PAGOS BIMESTRALES - $360.00">CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 2 PAGOS BIMESTRALES - $360.00</option>
                            <option value="CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 4 PAGOS MENSUALES - $181.00">CERTIFICACION INDUSTRIA 4.0 CUATRIMESTRAL EN 4 PAGOS MENSUALES - $181.00</option>
                            <option value="CERTIFICADO DE ESTUDIOS PARCIAL - $622.00">CERTIFICADO DE ESTUDIOS PARCIAL - $622.00</option>
                            <option value="REPOSICION DE BOLETA DE CALIFICACIONES - $114.00">REPOSICION DE BOLETA DE CALIFICACIONES - $114.00</option>
                            <option value="REPOSICION DE CREDENCIAL (TAG) ESTUDIANTE / TRANSPORTE - $184.00">REPOSICION DE CREDENCIAL TAG ESTUDIANTE / TRANSPORTE - $184.00</option>
                            <option value="EMISION DE TITULO POSGRADO - $2,542.00">EMISION DE TITULO POSGRADO - $2,542.00</option>
                            <option value="Transporte | selección al lazar">Transporte | selección al lazar</option>
                            <option value="Casillero - $695.00">Casillero - $695.00</option>
                          </select>
                        <p class="fw-bold text-danger"> {{$errors->first('txtServe')}}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-center text-dark" name="labelStatus">Estatus del alumno: </label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtStatus" value="{{old('txtStatus')}}">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="Espera">Espera</option>
                          </select>
                        <p class="fw-bold text-danger"> {{$errors->first('txtStatus')}}</p>
                    </div>
                    <div>
                        <button type="submit" name="btnGuardar">Guardar</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
