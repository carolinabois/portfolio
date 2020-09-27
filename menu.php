<nav class="navbar navbar-expand-md text-center px-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item pr-4 ">
                <a class="nav-link <?php echo $pg == "inicio" ? "active" : "" ; ?> " href="index.html">Inicio</a>
            </li>
            <li class="nav-item pr-4">
                <a class="nav-link <?php echo $pg == "sobre-mi" ? "active" : "" ; ?>" href="sobre-mi.html">Sobre mi</a>
            </li>
            <li class="nav-item pr-4">
                <a class="nav-link <?php echo $pg == "proyectos" ? "active" : "" ; ?>" href="proyectos.html">Proyectos</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link <?php echo $pg == "contacto" ? "active" : "" ; ?>" href="contacto.html">Contacto</a>
            </li>
        </ul>
    </div>
</nav>