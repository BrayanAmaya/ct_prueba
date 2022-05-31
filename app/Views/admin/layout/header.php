<nav class="navbar is-link">
    <div class="navbar-brand">
        <a class="navbar-item" href="http://ct_prueba.test/">
            <img src="/assets/img/DigiTechLogo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112"
                height="28">
        </a>
    </div>

    <div class="navbar-menu tabs is-centered is-boxed">
        <ul>
            <!--fas fa-file-alt-->
            <li class="<?=service('request')->uri->getPath() == 'admin/incidencias' ? 'is-active' : '' ?>">
                <a href="<?=base_url(route_to('incidencia'))?>">
                    <span class="icon is-small"><i class="fas fa-file-alt" aria-hidden="true"></i></span>
                    <span class="has-text-black">Incidencias</span>
                </a>
            </li>
            <li class="<?=service('request')->uri->getPath() == 'admin/registrar-usuario' ? 'is-active' : '' ?>">
                <a href="<?=base_url(route_to('register'))?>">
                    <span class="icon is-small"><i class="fas fa-user-plus" aria-hidden="true"></i></span>
                    <span class="has-text-black">Registrar usuario</span>
                </a>
            </li>
            <li class="<?=service('request')->uri->getPath() == 'admin/buscar-usuario' ? 'is-active' : '' ?>">
                <a href="<?=base_url(route_to('search'))?>">
                    <span class="icon is-small"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <span class="has-text-black">Buscar usuario</span>
                </a>
            </li>
            <li class="<?=service('request')->uri->getPath() == 'admin/agregar-dispositivo' ? 'is-active' : '' ?>">
                <a href="<?=base_url(route_to('addDispositivo'))?>">
                    <span class="icon is-small"><i class="fa fa-computer" aria-hidden="true"></i></span>
                    <span class="has-text-black">Agregar dispositivo</span>
                </a>
            </li>
            <!--<i class="fas fa-chart-bar"></i>-->
            <li class="<?=service('request')->uri->getPath() == 'admin/reportes' ? 'is-active' : '' ?>">
                <a href="<?=base_url(route_to('report'))?>">
                    <span class="icon is-small"><i class="fa fa-chart-column" aria-hidden="true"></i></span>
                    <span class="has-text-black">Reportes</span>
                </a>
            </li>
            <li class="<?=service('request')->uri->getPath() == 'admin/configuracion' ? 'is-active' : '' ?>">
                <a href="<?=base_url(route_to('config'))?>">
                    <span class="icon is-small"><i class="fa fa-cog" aria-hidden="true"></i></span>
                    <span class="has-text-black">Configuración</span>
                </a>
            </li>
        </ul>

        <a class="navbar-end" href="<?=base_url(route_to('logout'))?>">
            <span class="has-text-black is-right">Cerrar sesión</span>
            <span class="icon is-small"><i class="fas fa-sign-out-alt"></i></span>
        </a>
    </div>
</nav>