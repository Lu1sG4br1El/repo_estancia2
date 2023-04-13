@extends('layouts.appadmin')

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
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        <strong>Formulario Incompleto!</strong>{{$error}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    @endif
                    {{ __('You are USER!') }}
                    <h1 class="text-center">Editar datos del taller</h1>
                    <div>
                        <form method="post" action="{{ route('listaT.update', $tallerid->idT) }}">
                            @csrf
                            {!! method_field('PUT')!!}
                    <div class="mb-3">
                        <label class="form-label text-center text-dark" name="labelTaller">Taller: </label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtTaller" value="{{$tallerid->nombreT}}">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="Karate">Karate</option>
                            <option value="Taekwondo">Taekwondo</option>
                            <option value="Acondicionamiento Fisico">Acondicionamiento Fisico</option>
                            <option value="Futbol">Futbol</option>
                            <option value="Atletismo">Atletismo</option>
                            <option value="Voleibol">Voleibol</option>
                            <option value="Basquetbol">Basquetbol</option>
                            <option value="Baile de Salon">Baile de Salon</option>
                            <option value="Danza Folklorica">Danza Folklorica</option>
                            <option value="Dibujo">Dibujo</option>
                            <option value="Ajedrez">Ajedrez</option>
                            <option value="Música">Música</option>
                            <option value="Personas que Laboran">Personas que Laboran</option>
                          </select>
                        <p class="fw-bold text-danger"> {{$errors->first('txtTaller')}}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-center text-dark" name="labelDocente">Docente: </label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtDocente" value="{{$tallerid->docente}}">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="Gabo">Gabo</option>
                            <option value="Gabriel">Gabriel</option>
                            <option value="Luis">Luis</option>
                            <option value="Alonso Espinosa Villaverde">Alonso Espinosa Villaverde</option>
                          </select>
                        <p class="fw-bold text-danger"> {{$errors->first('txtDocente')}}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-center text-dark" name="labelHdE">Hora de entrada: </label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txtHdE" value="{{$tallerid->FyH}}">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="Lunes 1:00 pm a 2:00 pm">Lunes 1:00 pm a 2:00 pm</option>
                            <option value="Lunes 12:00 pm a 1:00 pm">Lunes 12:00 pm a 1:00 pm</option>
                            <option value="Miercoles 1:00 pm a 2:00 pm">Miercoles 1:00 pm a 2:00 pm</option>
                            <option value="Miercoles 2:00 pm a 3:00 pm">Miercoles 2:00 pm a 3:00 pm</option>
                            <option value="Viernes 1:00 pm a 2:00 pm">Viernes 1:00 pm a 2:00 pm</option>
                            <option value="Viernes 11:00 am a 12:00 pm">Viernes 11:00 am a 12:00 pm</option>
                          </select>
                        <p class="fw-bold text-danger"> {{$errors->first('txtHdE')}}</p>
                    </div>
                    <div>
                        <button type="submit" name="btnGuardar">Actualizar</button>
                    </div>
                        </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
