<form action="{{route('producto.update',$producto->id)}}" method="POST">
    @csrf
    <div class="row">
      <div class="form-group mb-2 col-md-4">
        <label for="nombre">Nombre del producto (*)</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" maxlength="255" 
          pattern="[A-Za-z0-9\s]+" value="{{$producto->nombre}}" required>
      </div>
      <div class="form-group mb-2 col-md-4">
        <label for="talla">Talla (*)</label>
        <select class="form-select" name="talla" id="talla" style="width: 100%;" required>
            <option value="">---</option>
            @isset($tallas)
            @foreach ($tallas as $talla)
            <option 
                value="{{$talla->id}}" {{ $producto->talla_id == $talla->id ? 'selected' : '' }}>
                  {{$talla->nombre}} - {{$talla->descripcion}}</option>
            @endforeach
            @endisset
        </select>
      </div>
      <div class="form-group mb-2 col-md-4">
        <label for="marca">Marca (*)</label>
        <select class="form-select" name="marca" id="marca" style="width: 100%;" required>
            <option value="">---</option>
            @isset($marcas)
            @foreach ($marcas as $marca)
            <option
                value="{{$marca->id}}" {{ $producto->marca_id == $marca->id ? 'selected' : '' }}>
                  {{$marca->nombre}} </option>
            @endforeach
            @endisset
        </select>
      </div>
    </div>

    <div class="row">
      <div class="form-group mb-2 col-md-4">
        <label for="observaciones">Observaciones (*)</label>
        <textarea class="form-control" aria-label="With textarea" id="observaciones" name="observaciones" rows="3">{{$producto->observaciones}}
        </textarea>
      </div>
      <div class="form-group mb-2 col-md-4">
        <label for="cantidadInventario">Cantidad en inventario (*)</label>
        <input type="text" class="form-control" id="cantidadInventario" name="cantidadInventario" placeholder="" 
        maxlength="15" pattern="[0-9]+" value="{{$producto->cantidad_inventario}}" required>
      </div>
      <div class="form-group mb-2 col-md-4">
        <label for="fechaEmbarque" class="font-weight-bold">Fecha de embarque (*)</label>
        <input type="date" name="fechaEmbarque" id="fechaEmbarque" class="form-control"
            placeholder="DD/MM/AAAA" pattern="[0-9/]+" max="{{$hoy}}" required value="{{$producto->fecha_embarque}}">
      </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger mb-2" role="alert">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif

    <button type="button" onclick="window.location.href='{{route('producto.index')}}';" class="btn btn-secondary mt-2" style="background-color:#333;">Atras</button>
    <button type="submit" class="btn btn-success mt-2">Actualizar</button>
  </form>
</div>

