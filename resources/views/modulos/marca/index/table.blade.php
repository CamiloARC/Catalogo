<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered" id="marcasTabla">
            <thead class="thead-light">
                <tr class="text-center">
                    {{-- <th scope="col" class="align-middle">Id</th> --}}
                    {{-- <th scope="col" class="align-middle">Tipo</th> --}}
                    <th scope="col" class="align-middle">ID</th>
                    <th scope="col" class="align-middle">Nombre</th>
                    <th scope="col" class="align-middle">Referencia</th>
                    <th scope="col" class="align-middle">Acción</th>
                </tr>
            </thead>
            <tbody>
                @isset($marcas)
                @if (count($marcas))
                @foreach ($marcas as $marca)
                <tr class="text-center">
                    {{-- <td>{{ $filtro->id}}</td> --}}
                    {{-- <td>{{ $filtro->tipo}}</td> --}}
                    <td>{{ $marca->id}}</td>
                    <td>{{ $marca->nombre}}</td>
                    <td>{{ $marca->referencia}} </td>
                    <td>
                        
                        <form action="{{ route('marca.destroy',$marca->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}

                            <a href="{{ route('marca.edit',$marca->id) }}" class="btn btn-sm btn-primary">
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
