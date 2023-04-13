@extends('layouts.app')

@section('content')
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

                    {{ __('You are USER!') }}
                    <h1 class="text-center text-black">Documentos</h1>
                	<div class="card1 m-4 text-black">	
                        <p>Constancia</p>
                        <a href="{{route('descargarPDF')}}" class="btn btn-outline-primary">Descargar PDF</a>
                    </div>
                    <div class="card1 m-4 text-black">
                        <p>Kardex </p>
                        <a href="{{route('descargarPDF2')}}" class="btn btn-outline-primary">Descargar PDF</a>
                    </div>
                    <div class="card1 m-4 text-black">
                        <p>Historial Academico </p>
                        <a href="{{route('descargarPDF3')}}" class="btn btn-outline-primary">Descargar PDF</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
