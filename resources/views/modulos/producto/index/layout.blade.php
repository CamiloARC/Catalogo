@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      Productos
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-5 mb-3">
                <a href="{{route('producto.create')}}" class="btn btn-success mb-1 addProducto">
                <span>Crear nuevo producto</span></a>
            </div>
        </div>
        <div class="row">
            @include('modulos.marca.index.messages')
            @include('modulos.producto.index.table')
        </div>
    </div>
@endsection

@section('scripts')
  {{-- <script type="text/javascript" src="{{asset('js/modulos/marca/index.js')}}" defer></script> --}}
  {{-- @vite('resources/js/modulos/marca/index.js') --}}
  <script>

  </script>
@endsection