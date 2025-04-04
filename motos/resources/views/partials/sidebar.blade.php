<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                    Inicio
                </a>
                <div class="sb-sidenav-menu-heading">Contenido</div>

                <a class="nav-link" href="{{ route('motos') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-motorcycle"></i></div>
                    Motos
                </a>
                <a class="nav-link" href="{{ route('marcas') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Marcas
                </a>
                <a class="nav-link" href="{{ route('tipos') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Tipos
                </a>
                <a class="nav-link" href="{{ route('paises') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-location-dot"></i></div>
                    Paises
                </a>

                <div class="sb-sidenav-menu-heading">Ajustes</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>