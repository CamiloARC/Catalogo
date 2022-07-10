

<form action="{{route('marca.store')}}" method="POST">
    @csrf
    <div class="row">
      <div class="form-group mb-2 col-md-4">
        <label for="nombre">Nombre de la marca (*)</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" maxlength="255" pattern="[A-Za-z ]+" 
          value="" required>
      </div>
      <div class="form-group mb-2 col-md-4">
        <label for="referencia">Referencia (*)</label>
        <input type="text" class="form-control" id="referencia" name="referencia" placeholder="" maxlength="15" pattern="[0-9]+"
          value="" required>
          <small id="refrenciaHelp" class="form-text text-muted">La referencia es númerica</small>
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
    <button type="submit" class="btn btn-success mt-2">Guardar</button>
  </form>
</div>

