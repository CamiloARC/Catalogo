@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      Marcas
    </div>
    <div class="card-body">
        <div class="row">
            @include('modulos.marca.edit.form')
        </div>
    </div>
@endsection

@section('scripts')
@endsection