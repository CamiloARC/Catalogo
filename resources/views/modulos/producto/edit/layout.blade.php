@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      Productos
    </div>
    <div class="card-body">
        <div class="row">
            @include('modulos.producto.edit.form')
        </div>
    </div>
@endsection

@section('scripts')
@endsection