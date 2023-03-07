<div class="menu">
                <ul class="list">
                    <li class="header">MENÚ DE NAVEGACIÓN</li>
                    <li>
                        <a href="{{ route('home') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    @can('haveaccess','user.index')  
                    <li
                        @if( request()->path() === 'user' )
                            class="active"
                        @endif
                    >
                        <a class="menu-toggle">
                            <i class="material-icons">accessibility</i>
                            <span>Usuarios</span>
                        </a>
                        <ul class="ml-menu">
                            <li
                            @if( request()->path() === 'user' )
                                    class="active"
                                @endif
                            >
                                <a href="{{ route('user.index') }}">Listado de Usuarios </a>
                            </li>
                            @can('haveaccess','user.create')
                            <li>
                                <a href="{{ route('user.create') }}">Crear nuevo Usuario</a>
                            </li>
                            @endcan 
                        </ul>
                    </li>
                    @endcan  

                    @can('haveaccess','role.index')  
                    <li
                        @if( request()->path() === 'role' )
                            class="active"
                        @endif
                    >
                        <a class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Roles</span>
                        </a>
                        <ul class="ml-menu">
                            <li
                            @if( request()->path() === 'role' )
                                    class="active"
                                @endif
                            >
                                <a href="{{ route('role.index') }}">Listado de roles </a>
                            </li>
                            @can('haveaccess','role.create')
                            <li>
                                <a href="{{ route('role.create') }}">Crear nuevo Rol</a>
                            </li>
                            @endcan 
                        </ul>
                    </li>
                    @endcan  

                    @can('haveaccess','period.index')  
                    <li
                        @if( request()->path() === 'period' )
                            class="active"
                        @endif
                    >
                        <a class="menu-toggle">
                            <i class="material-icons">check_circle</i>
                            <span>Periodos</span>
                        </a>
                        <ul class="ml-menu">
                            <li
                            @if( request()->path() === 'period' )
                                    class="active"
                                @endif
                            >
                                <a href="{{ route('period.index') }}">Listado de Periodos </a>
                            </li>
                            @can('haveaccess','period.create')
                            <li>
                                <a href="{{ route('period.create') }}">Crear nuevo Periodo</a>
                            </li>
                            @endcan 
                        </ul>
                    </li>
                    @endcan 

                    @can('haveaccess','rule.index')
                    <li>
                        <a href="{{ route('rule.index') }}">
                            <i class="material-icons">stars</i>
                            <span>Reglas de asignación</span>
                        </a>
                    </li>
                    @endcan  

                    @can('haveaccess','distributive.index')
                    <li>
                        <a href="{{ route('distributive.index') }}">
                            <i class="material-icons">group</i>
                            <span>Distributivos</span>
                        </a>
                    </li>
                    @endcan  
                </ul>
            </div>