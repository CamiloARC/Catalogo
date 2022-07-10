@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      Dashboard
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Marcas</h5>
                                <span class="h2 font-weight-bold mb-0">{{$cantidadMarcas}}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape rounded-circle">
                                    <i class="fa-solid fa-copyright"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Productos</h5>
                                <span class="h2 font-weight-bold mb-0">0</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape rounded-circle">
                                    <i class="fa-solid fa-shirt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
