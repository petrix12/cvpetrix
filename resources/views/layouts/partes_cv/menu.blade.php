<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        @if (!(Route::current()->getName() == 'welcome'))
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('welcome') }}"><span class="color33">Inicio</span></a>
        </li>
        @endif

        @if (!(Route::current()->getName() == 'portafolio'))
        <li class="nav-item">
            <a class="nav-link" href="portafolio.php"><span class="color33">Portafolio</span></a>
        </li>
        @endif

        @if (!(Route::current()->getName() == 'servicios'))
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('servicios') }}"><span class="color33">Servicios</span></a>
        </li>
        @endif

        @if (!(Route::current()->getName() == 'formacion'))
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('formacion') }}"><span class="color33">Formación</span></a>
        </li>
        @endif

        @if (!(Route::current()->getName() == 'experiencia'))
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('experiencia') }}"><span class="color33">Experiencia</span></a>
        </li>
        @endif

        @if (!(Route::current()->getName() == 'contactame'))
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('contactame') }}"><span class="color33">Contáctame</span></a>
        </li>
        @endif
    </ul>
</div>