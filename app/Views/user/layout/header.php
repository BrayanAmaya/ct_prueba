<nav class="navbar is-link">
    <div class="navbar-brand">
        <a class="navbar-item" href="http://ct_prueba.test/">
            <img src="/assets/img/DigiTechLogo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112"
                height="28">
        </a>
    </div>

    <div class="navbar-menu tabs is-centered is-boxed">
        <ul>
            <li class="<?=service('request')->uri->getPath() == 'user/home' ? 'is-active' : '' ?>">
                <a href="<?=base_url(route_to('user'))?>">
                    <span class="icon is-small"><i class="fas fa-file-alt" aria-hidden="true"></i></span>
                    <span class="has-text-black">Mis incidencias</span>
                </a>
            </li>
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