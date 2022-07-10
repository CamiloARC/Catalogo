<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered" id="productosTabla">
            <thead class="thead-light">
                <tr class="text-center">
                    {{-- <th scope="col" class="align-middle">Id</th> --}}
                    {{-- <th scope="col" class="align-middle">Tipo</th> --}}
                    <th scope="col" class="align-middle">ID</th>
                    <th scope="col" class="align-middle">Nombre</th>
                    <th scope="col" class="align-middle">Talla</th>
                    <th scope="col" class="align-middle">Observaciones</th>
                    <th scope="col" class="align-middle">Marca</th>
                    <th scope="col" class="align-middle">Cantidad en inventario</th>
                    <th scope="col" class="align-middle">Fecha inventario</th>
                    <th scope="col" class="align-middle">Acción</th>
                </tr>
            </thead>
            <tbody>
                @isset($productos)
                @if (count($productos))
                @foreach ($productos as $producto)
                <tr class="text-center">
                    {{-- <td>{{ $filtro->id}}</td> --}}
                    {{-- <td>{{ $filtro->tipo}}</td> --}}
                    <td>{{ $producto->id}}</td>
                    <td>{{ $producto->nombre}}</td>
                    <td>{{ $producto->talla->nombre}} </td>
                    <td>{{ $producto->observaciones}} </td>
                    <td>{{ $producto->marca->nombre}} </td>
                    <td>{{ $producto->cantidad_inventario}} </td>
                    <td>{{ $producto->fecha_embarque}} </td>
                    <td>
                        
                        <form action="{{ route('marca.destroy',$producto->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}

                            <a href="{{ route('marca.edit',$producto->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-edit"></i> Editar </a>

                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i> Eliminar </button>
                        </form>
                        {{-- <button
                            type="button" class="eliminarMarcaBtn btn btn-sm btn-danger" data-bs-toggle="modal" 
                            data-bs-target="#eliminarMarcaModal" marcaId="{{$marca->id}}">
                            <i class="fas fa-trash-alt"></i> Eliminar</button> --}}
                    </td>
                </tr>
                @endforeach
                @endif
                @endisset
            </tbody>
        </table>
    </div>
</div>
