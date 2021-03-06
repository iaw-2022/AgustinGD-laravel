<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')

                @canany(['viewAny'], App\Models\Producto::class)               
                    <li  class="nav-header ">ADMINISTRAR PRODUCTOS</li>
                @elsecanany(['viewAny'], App\Models\Categoria::class) 
                    <li  class="nav-header ">ADMINISTRAR PRODUCTOS</li>
                @endcanany

                @canany(['viewAny'], App\Models\Producto::class)  
                    <li  class="nav-item">
                        <a class="nav-link @isset($activeProductos) {{$activeProductos}} @endisset" href="/productos">
                            <i class="fas fa-fw fa-cubes "></i><p> Productos</p>
                        </a>
                    </li>
                @endcanany
                @canany(['viewAny'], App\Models\Categoria::class) 
                    <li  class="nav-item">
                        <a class="nav-link @isset($activeCategorias) {{$activeCategorias}} @endisset" href="/categorias">
                            <i class="fas fa-fw fa-tags "></i><p> Categorias</p>
                        </a>
                    </li>
                @endcanany

                @canany(['viewAny'], App\Models\Cliente::class)               
                    <li  class="nav-header">ADMINISTRAR CLIENTES</li>
                @elsecanany(['viewAny'], App\Models\Pedido::class) 
                    <li  class="nav-header">ADMINISTRAR CLIENTES</li>
                @endcanany

                @canany(['viewAny'], App\Models\Cliente::class)  
                <li  class="nav-item">
                    <a class="nav-link @isset($activeClientes) {{$activeClientes}} @endisset" href="/clientes">
                        <i class="fas fa-fw fa-child "></i><p> Clientes</p>
                    </a>
                </li>
                @endcanany
                @canany(['viewAny'], App\Models\Pedido::class) 
                <li  class="nav-item">
                    <a class="nav-link @isset($activePedidos) {{$activePedidos}} @endisset" href="/pedidos">
                        <i class="fas fa-fw fa-envelope "></i><p> Pedidos</p>
                    </a>
                </li>
                @endcanany

                @canany(['viewAny'], App\Models\User::class) 
                    <li  class="nav-header">ADMINISTRAR USUARIOS</li>
                @endcanany
                @canany(['viewAny'], App\Models\User::class) 
                    <li  class="nav-item">
                        <a class="nav-link @isset($activeUsers) {{$activeUsers}} @endisset" href="/users">
                            <i class="fas fa-fw fa-users "></i><p> Usuarios</p>
                        </a>
                    </li>
                @endcanany
            </ul>
        </nav>
    </div>

</aside>
