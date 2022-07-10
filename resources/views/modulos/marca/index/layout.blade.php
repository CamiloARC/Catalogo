@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      Marcas
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-5 mb-3">
                <a href="{{route('marca.create')}}" class="btn btn-success mb-1 addMarca">
                <span>Crear nueva marca</span></a>
            </div>
        </div>
        <div class="row">
            @include('modulos.marca.index.messages')
            @include('modulos.marca.index.table')
        </div>
    </div>
    @include('modulos.marca.index.modalDelete')
@endsection

@section('scripts')
  {{-- <script type="text/javascript" src="{{asset('js/modulos/marca/index.js')}}" defer></script> --}}
  {{-- @vite('resources/js/modulos/marca/index.js') --}}
  <script>

  </script>
@endsection