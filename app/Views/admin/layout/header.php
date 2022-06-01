<nav class="navbar is-link">
    <div class="navbar-brand">
        <a class="navbar-item" href="http://ct_prueba.test/">
            <img src="/assets/img/DigiTechLogo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112"
                height="28">
        </a>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu is-right">
        <div class="navbar-start">
            <a class="navbar-item <?=service('request')->uri->getPath() == 'admin/incidencias' ? 'is-active' : '' ?>"
                href="<?=base_url(route_to('incidencia'))?>">
                <span class="icon"><i class="fas fa-file-alt" aria-hidden="true"></i></span>
                <span>Incidencias</span>
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Gestionar
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item <?=service('request')->uri->getPath() == 'admin/registrar-usuario' ? 'is-active' : '' ?>"
                        href="<?=base_url(route_to('register'))?>">
                        <span class="icon"><i class="fas fa-user-plus" aria-hidden="true"></i></span>
                        <span> Usuarios</span>
                    </a>
                    <a class="navbar-item <?=service('request')->uri->getPath() == 'admin/registrar-ct' ? 'is-active' : '' ?>"
                        href="<?=base_url(route_to('registerCt'))?>">
                        <span class="icon"><i class="fas fa-desktop" aria-hidden="true"></i></span>
                        <span> Centros de tecnologia</span>
                    </a>
                </div>
            </div>

            <a class="navbar-item <?=service('request')->uri->getPath() == 'admin/buscar-usuario' ? 'is-active' : '' ?>"
                href="<?=base_url(route_to('search'))?>">
                <span class="icon"><i class="fas fa-search" aria-hidden="true"></i></span>
                <span>Buscar usuario</span>
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Gestionar dispositivos
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item <?=service('request')->uri->getPath() == '' ? 'is-active' : '' ?>"
                        href="<?=base_url(route_to('register'))?>">
                        <span class="icon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
                        <span>Tipo de dispositivos</span>
                    </a>
                    <a class="navbar-item" href="#">
                        <span class="icon"><i class="fa fa-computer" aria-hidden="true"></i></span>
                        <span>Agregar dispositvios</span>
                    </a>
                    <a class="navbar-item" href="#">
                        <span class="icon"><i class="fas fa-desktop" aria-hidden="true"></i></span>
                        <span>Agregar dispositivo a CT</span>
                    </a>
                </div>
            </div>

            <a class="navbar-item <?=service('request')->uri->getPath() == 'admin/reportes' ? 'is-active' : '' ?>"
                href="<?=base_url(route_to('report'))?>">
                <span class="icon"><i class="fa fa-chart-column" aria-hidden="true"></i></span>
                <span>Reportes</span>
            </a>

            <a class="navbar-item <?=service('request')->uri->getPath() == 'admin/configuracion' ? 'is-active' : '' ?>"
                href="<?=base_url(route_to('config'))?>">
                <span class="icon"><i class="fa fa-cog"></i></span>
                <span>Configuración</span>
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        <a class="button is-link has-text-black is-boxed" href="<?=base_url(route_to('logout'))?>">
                            <span class="has-text-white">Cerrar sesión</span>
                            <span class="icon has-text-white"><i class="fas fa-sign-out-alt"></i></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
</nav>