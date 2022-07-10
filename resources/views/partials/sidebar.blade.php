<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Catálogo de productos</h3>
    </div>

    <ul class="list-unstyled components mt-1">
        <li class="{{ (request()->is('/')) ? 'active' : '' }}">
            <a href="{{route('dashboard')}}"><i class="fa-solid fa-chart-simple"></i> Dashboard</a>
        </li>
        <li class="{{ (request()->is('marcas*')) ? 'active' : '' }}">
            <a href="{{route('marca.index')}}"><i class="fa-solid fa-copyright"></i> Marcas</a>
        </li>
        <li class="{{ (request()->is('productos*')) ? 'active' : '' }}">
            <a href="{{route('producto.index')}}"><i class="fa-solid fa-shirt"></i> Productos</a>
        </li>
    </ul>
</nav>