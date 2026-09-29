<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e8f5e9;">
    <div class="container-fluid px-4">

        <!-- LOGO + NOMBRE -->
        <a class="navbar-brand fw-bold text-success fs-4 me-5 d-flex align-items-center gap-2"
           href="{{ url('/') }}">

            <img src="{{ asset('images/logo-sena.png') }}"
                 alt="Logo SENA"
                 height="40">

            Admin Sena
        </a>


        <!-- BOTÓN PARA CELULAR -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- MENÚ -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">


                <!-- QUIÉNES SOMOS -->
                <li class="nav-item">

                    <a class="nav-link text-success fw-semibold"
                       href="{{ route('quienes.somos') }}">

                        <i class="bi bi-info-circle me-1"></i>
                        ¿Quiénes somos?

                    </a>

                </li>


                <!-- ADMINISTRACIÓN -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-success fw-semibold"
                       href="#"
                       id="administracionDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        <i class="bi bi-gear me-1"></i>
                        Administración

                    </a>


                    <!-- OPCIONES DEL DROPDOWN -->
                    <ul class="dropdown-menu shadow-sm border-0"
                        aria-labelledby="administracionDropdown">


                        <!-- INSTRUCTORES -->
                        <li>

                            <a class="dropdown-item"
                               href="{{ route('teacher.list') }}">

                                <i class="bi bi-person-workspace me-2"></i>
                                Instructores

                            </a>

                        </li>


                        <!-- CURSOS -->
                        <li>

                            <a class="dropdown-item"
                               href="{{ route('course.list') }}">

                                <i class="bi bi-book me-2"></i>
                                Cursos

                            </a>

                        </li>


                        <!-- ÁREAS -->
                        <li>

                            <a class="dropdown-item"
                               href="{{ route('area.list') }}">

                                <i class="bi bi-grid me-2"></i>
                                Áreas

                            </a>

                        </li>


                        <!-- APRENDICES -->
                        <li>

                            <a class="dropdown-item"
                               href="{{ route('aprendice.list') }}">

                                <i class="bi bi-mortarboard me-2"></i>
                                Aprendices

                            </a>

                        </li>


                        <!-- COMPUTADORES -->
                        <li>

                            <a class="dropdown-item"
                               href="{{ route('computer.list') }}">

                                <i class="bi bi-pc-display me-2"></i>
                                Computadores

                            </a>

                        </li>


                        <!-- CENTROS DE FORMACIÓN -->
                        <li>

                            <a class="dropdown-item"
                               href="{{ route('training_center.list') }}">

                                <i class="bi bi-building me-2"></i>
                                Centros de Formación

                            </a>

                        </li>

                    </ul>

                </li>


                <!-- CONTACTANOS -->
                <li class="nav-item">

                    <a class="nav-link text-success fw-semibold"
                       href="{{ route('contactanos') }}">

                        <i class="bi bi-envelope me-1"></i>
                        Contáctanos

                    </a>

                </li>


                <!-- BUSCAR -->
                <li class="nav-item">

                    <form class="d-flex" role="search">

                        <input
                            class="form-control form-control-sm me-2"
                            type="search"
                            placeholder="Buscar..."
                            aria-label="Buscar">

                        <button
                            class="btn btn-outline-success btn-sm"
                            type="submit">

                            <i class="bi bi-search"></i>

                        </button>

                    </form>

                </li>

            </ul>


            <!-- USUARIO -->
            <div class="d-flex align-items-center">

                <button
                    type="button"
                    class="btn btn-outline-success"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal">

                    <i class="bi bi-person-circle me-1"></i>
                    Iniciar sesión

                </button>

            </div>

        </div>

    </div>
</nav>



<!-- ===================================================== -->
<!-- MODAL INICIAR SESIÓN -->
<!-- ===================================================== -->

<div class="modal fade"
     id="loginModal"
     tabindex="-1"
     aria-labelledby="loginModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow">


            <!-- ENCABEZADO -->
            <div class="modal-header bg-success text-white">

                <h5 class="modal-title" id="loginModalLabel">

                    <i class="bi bi-person-circle me-2"></i>

                    Iniciar sesión

                </h5>


                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>


            <!-- CUERPO -->
            <div class="modal-body p-4">


                <!-- ICONO Y BIENVENIDA -->
                <div class="text-center mb-4">

                    <div class="login-icon">

                        <i class="bi bi-person-circle"></i>

                    </div>

                    <h4 class="mt-3 fw-bold">
                        Bienvenido a AdminSena
                    </h4>

                    <p class="text-muted mb-0">
                        Ingresa tus datos para continuar
                    </p>

                </div>


                <!-- NOMBRE DE USUARIO -->
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nombre de usuario
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Ingresa tu nombre de usuario">

                    </div>

                </div>


                <!-- CORREO ELECTRÓNICO -->
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Correo electrónico
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            class="form-control"
                            placeholder="correo@ejemplo.com">

                    </div>

                </div>


                <!-- CONTRASEÑA -->
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Contraseña
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            class="form-control"
                            placeholder="Ingresa tu contraseña">

                    </div>

                </div>


                <!-- BOTÓN INGRESAR -->
                <div class="d-grid">

                    <button
                        type="button"
                        class="btn btn-success btn-lg">

                        <i class="bi bi-box-arrow-in-right me-2"></i>

                        Ingresar

                    </button>

                </div>


                <!-- REGISTRARSE -->
                <div class="text-center mt-3 mb-2">

                    <span class="small text-muted">
                        ¿No tienes una cuenta?
                    </span>

                    <a href="#"
                       class="text-success fw-semibold text-decoration-none small"
                       data-bs-toggle="modal"
                       data-bs-target="#registroModal">

                        Regístrate

                    </a>

                </div>


                <!-- CONTRASEÑA OLVIDADA -->
                <div class="text-center">

                    <a href="#"
                       class="text-success text-decoration-none small">

                        ¿Olvidaste tu contraseña?

                    </a>

                </div>


            </div>

        </div>

    </div>

</div>



<!-- ===================================================== -->
<!-- MODAL REGISTRO -->
<!-- ===================================================== -->

<div class="modal fade"
     id="registroModal"
     tabindex="-1"
     aria-labelledby="registroModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow">


            <!-- ENCABEZADO -->
            <div class="modal-header bg-success text-white">

                <h5 class="modal-title" id="registroModalLabel">

                    <i class="bi bi-person-plus me-2"></i>

                    Crear cuenta

                </h5>


                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>


            <!-- CUERPO -->
            <div class="modal-body p-4">


                <!-- ICONO Y BIENVENIDA -->
                <div class="text-center mb-4">

                    <div class="login-icon">

                        <i class="bi bi-person-plus-fill"></i>

                    </div>

                    <h4 class="mt-3 fw-bold">
                        Crea tu cuenta
                    </h4>

                    <p class="text-muted mb-0">
                        Regístrate para acceder a AdminSena
                    </p>

                </div>


                <!-- NOMBRE DE USUARIO -->
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nombre de usuario
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Crea un nombre de usuario">

                    </div>

                </div>


                <!-- CORREO ELECTRÓNICO -->
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Correo electrónico
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            class="form-control"
                            placeholder="correo@ejemplo.com">

                    </div>

                </div>


                <!-- CONTRASEÑA -->
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Contraseña
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            class="form-control"
                            placeholder="Crea una contraseña">

                    </div>

                </div>


                <!-- CONFIRMAR CONTRASEÑA -->
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Confirmar contraseña
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </span>

                        <input
                            type="password"
                            class="form-control"
                            placeholder="Repite tu contraseña">

                    </div>

                </div>


                <!-- BOTÓN REGISTRARSE -->
                <div class="d-grid">

                    <button
                        type="button"
                        class="btn btn-success btn-lg">

                        <i class="bi bi-person-plus me-2"></i>

                        Registrarse

                    </button>

                </div>


                <!-- VOLVER AL LOGIN -->
                <div class="text-center mt-3">

                    <span class="small text-muted">
                        ¿Ya tienes una cuenta?
                    </span>

                    <a href="#"
                       class="text-success fw-semibold text-decoration-none small"
                       data-bs-toggle="modal"
                       data-bs-target="#loginModal">

                        Inicia sesión

                    </a>

                </div>


            </div>

        </div>

    </div>

</div>



<!-- ===================================================== -->
<!-- ESTILOS DEL NAVBAR Y MODALES -->
<!-- ===================================================== -->

<style>


    /* ================================
       OPCIONES DEL DROPDOWN
    ================================= */

    .dropdown-menu .dropdown-item {

        color: #1f5d23;

        font-weight: 500;

        padding: 10px 18px;

        transition: all 0.2s ease;

    }


    /* AL PASAR EL MOUSE */

    .dropdown-menu .dropdown-item:hover {

        background-color: #e8f5e9;

        color: #198754 !important;

    }


    /* AL HACER CLIC */

    .dropdown-menu .dropdown-item:focus,
    .dropdown-menu .dropdown-item:active {

        background-color: #dff2e1 !important;

        color: #198754 !important;

    }


    /* ICONOS DEL DROPDOWN */

    .dropdown-menu .dropdown-item i {

        color: #198754;

    }


    /* SOMBRA DEL MENÚ */

    .dropdown-menu {

        border-radius: 10px;

        overflow: hidden;

    }


    /* NAVBAR LINKS */

    .navbar .nav-link {

        transition: all 0.2s ease;

    }


    .navbar .nav-link:hover {

        color: #146c43 !important;

    }


    /* BOTÓN INICIAR SESIÓN */

    .btn-outline-success {

        transition: all 0.2s ease;

    }


    .btn-outline-success:hover {

        background-color: #198754;

        color: white;

    }


    /* ================================
       ICONO DE LOS MODALES
    ================================= */

    .login-icon {

        width: 75px;

        height: 75px;

        margin: 0 auto;

        border-radius: 50%;

        background-color: #e8f5e9;

        color: #198754;

        display: flex;

        align-items: center;

        justify-content: center;

        font-size: 45px;

    }


    /* ================================
       CAMPOS DEL LOGIN
    ================================= */

    #loginModal .input-group-text {

        background-color: #e8f5e9;

        color: #198754;

        border-color: #dee2e6;

    }


    #loginModal .form-control:focus {

        border-color: #198754;

        box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.15);

    }


    /* ================================
       CAMPOS DEL REGISTRO
    ================================= */

    #registroModal .input-group-text {

        background-color: #e8f5e9;

        color: #198754;

        border-color: #dee2e6;

    }


    #registroModal .form-control:focus {

        border-color: #198754;

        box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.15);

    }


    /* ================================
       BOTONES DEL LOGIN
    ================================= */

    #loginModal .btn-success {

        transition: all 0.2s ease;

    }


    #loginModal .btn-success:hover {

        transform: translateY(-1px);

    }


    /* ================================
       BOTONES DEL REGISTRO
    ================================= */

    #registroModal .btn-success {

        transition: all 0.2s ease;

    }


    #registroModal .btn-success:hover {

        transform: translateY(-1px);

    }


    /* ================================
       ENLACES DE REGISTRO
    ================================= */

    #loginModal a,
    #registroModal a {

        transition: all 0.2s ease;

    }


    #loginModal a:hover,
    #registroModal a:hover {

        color: #146c43 !important;

        text-decoration: underline !important;

    }


</style>