@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      Marcas
    </div>
    <div class="card-body">
        <div class="row">
            @include('modulos.marca.create.form')
        </div>
    </div>
@endsection

@section('scripts')
@endsection