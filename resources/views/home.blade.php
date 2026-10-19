@extends('layouts.app')

@section('content')

<!-- CARRUSEL -->
<div id="carouselSena" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-indicators">

        <button type="button"
                data-bs-target="#carouselSena"
                data-bs-slide-to="0"
                class="active"
                aria-current="true">
        </button>

        <button type="button"
                data-bs-target="#carouselSena"
                data-bs-slide-to="1">
        </button>

        <button type="button"
                data-bs-target="#carouselSena"
                data-bs-slide-to="2">
        </button>

        <button type="button"
                data-bs-target="#carouselSena"
                data-bs-slide-to="3">
        </button>

    </div>


    <div class="carousel-inner">

        <!-- IMAGEN 1 -->
        <div class="carousel-item active">

            <img src="{{ asset('images/sena1.jpg') }}"
                 class="d-block w-100"
                 style="height: 450px; object-fit: cover;"
                 alt="SENA">

            <div class="carousel-caption">

                <div class="carousel-text">

                    <h2>Formación que transforma vidas</h2>

                    <p>
                        El SENA contribuye al desarrollo de los colombianos
                        mediante la formación profesional integral.
                    </p>

                </div>

            </div>

        </div>


        <!-- IMAGEN 2 -->
        <div class="carousel-item">

            <img src="{{ asset('images/sena2.jpg') }}"
                 class="d-block w-100"
                 style="height: 450px; object-fit: cover;"
                 alt="Aprendices SENA">

            <div class="carousel-caption">

                <div class="carousel-text">

                    <h2>Educación y oportunidades</h2>

                    <p>
                        Fortaleciendo conocimientos y competencias
                        para el mundo laboral.
                    </p>

                </div>

            </div>

        </div>


        <!-- IMAGEN 3 -->
        <div class="carousel-item">

            <img src="{{ asset('images/sena3.jpg') }}"
                 class="d-block w-100"
                 style="height: 450px; object-fit: cover;"
                 alt="Tecnología SENA">

            <div class="carousel-caption">

                <div class="carousel-text">

                    <h2>Innovación y tecnología</h2>

                    <p>
                        Preparando a los aprendices para los desafíos
                        del futuro.
                    </p>

                </div>

            </div>

        </div>


        <!-- IMAGEN 4 -->
        <div class="carousel-item">

            <img src="{{ asset('images/sena4.jpg') }}"
                 class="d-block w-100"
                 style="height: 450px; object-fit: cover;"
                 alt="Centro de formación SENA">

            <div class="carousel-caption">

                <div class="carousel-text">

                    <h2>El SENA, presente en Colombia</h2>

                    <p>
                        Generando oportunidades de formación y desarrollo
                        para los colombianos.
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- BOTÓN ANTERIOR -->
    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselSena"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

        <span class="visually-hidden">
            Anterior
        </span>

    </button>


    <!-- BOTÓN SIGUIENTE -->
    <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselSena"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

        <span class="visually-hidden">
            Siguiente
        </span>

    </button>

</div>


<!-- PRESENTACIÓN -->
<div class="container py-5">

    <div class="text-center mb-5">

        <span class="badge rounded-pill bg-success px-3 py-2 mb-3">
            PLATAFORMA ADMINISTRATIVA
        </span>

        <h1 class="fw-bold text-success display-6">
            Bienvenido a AdminSena
        </h1>

        <p class="lead text-muted mx-auto" style="max-width: 750px;">
            Una plataforma diseñada para facilitar la administración
            y gestión de la información del centro de formación SENA.
        </p>

    </div>


    <!-- TARJETAS -->
    <div class="row g-4 justify-content-center">


        <!-- ================================= -->
        <!-- APRENDICES -->
        <!-- ================================= -->

        <div class="col-lg-4 col-md-6">

            <a href="{{ route('aprendice.list') }}"
               class="text-decoration-none text-dark">

                <div class="admin-card">

                    <div class="icon-container">

                        <i class="bi bi-mortarboard-fill"></i>

                    </div>

                    <h4>
                        Aprendices
                    </h4>

                    <p>
                        Consulta y administra la información
                        de los aprendices.
                    </p>

                    <span class="card-link">

                        Gestión de aprendices

                        <i class="bi bi-arrow-right"></i>

                    </span>

                </div>

            </a>

        </div>


        <!-- ================================= -->
        <!-- INSTRUCTORES -->
        <!-- ================================= -->

        <div class="col-lg-4 col-md-6">

            <a href="{{ route('teacher.list') }}"
               class="text-decoration-none text-dark">

                <div class="admin-card">

                    <div class="icon-container">

                        <i class="bi bi-person-workspace"></i>

                    </div>

                    <h4>
                        Instructores
                    </h4>

                    <p>
                        Gestiona y consulta la información
                        de los instructores.
                    </p>

                    <span class="card-link">

                        Gestión de instructores

                        <i class="bi bi-arrow-right"></i>

                    </span>

                </div>

            </a>

        </div>


        <!-- ================================= -->
        <!-- CURSOS -->
        <!-- ================================= -->

        <div class="col-lg-4 col-md-6">

            <a href="{{ route('course.list') }}"
               class="text-decoration-none text-dark">

                <div class="admin-card">

                    <div class="icon-container">

                        <i class="bi bi-book-half"></i>

                    </div>

                    <h4>
                        Cursos
                    </h4>

                    <p>
                        Administra los cursos y programas
                        de formación.
                    </p>

                    <span class="card-link">

                        Gestión de cursos

                        <i class="bi bi-arrow-right"></i>

                    </span>

                </div>

            </a>

        </div>


        <!-- ================================= -->
        <!-- COMPUTADORES -->
        <!-- ================================= -->

        <div class="col-lg-4 col-md-6">

            <a href="{{ route('computer.list') }}"
               class="text-decoration-none text-dark">

                <div class="admin-card">

                    <div class="icon-container">

                        <i class="bi bi-pc-display"></i>

                    </div>

                    <h4>
                        Computadores
                    </h4>

                    <p>
                        Consulta y administra los equipos
                        disponibles en el centro.
                    </p>

                    <span class="card-link">

                        Gestión de equipos

                        <i class="bi bi-arrow-right"></i>

                    </span>

                </div>

            </a>

        </div>


        <!-- ================================= -->
        <!-- ÁREAS -->
        <!-- ================================= -->

        <div class="col-lg-4 col-md-6">

            <a href="{{ route('area.list') }}"
               class="text-decoration-none text-dark">

                <div class="admin-card">

                    <div class="icon-container">

                        <i class="bi bi-grid-1x2-fill"></i>

                    </div>

                    <h4>
                        Áreas
                    </h4>

                    <p>
                        Administra las diferentes áreas
                        del centro de formación.
                    </p>

                    <span class="card-link">

                        Gestión de áreas

                        <i class="bi bi-arrow-right"></i>

                    </span>

                </div>

            </a>

        </div>


        <!-- ================================= -->
        <!-- CENTROS DE FORMACIÓN -->
        <!-- ================================= -->

        <div class="col-lg-4 col-md-6">

            <a href="{{ route('training_center.list') }}"
               class="text-decoration-none text-dark">

                <div class="admin-card">

                    <div class="icon-container">

                        <i class="bi bi-building-fill"></i>

                    </div>

                    <h4>
                        Centros de Formación
                    </h4>

                    <p>
                        Gestiona la información de los
                        centros de formación.
                    </p>

                    <span class="card-link">

                        Gestión de centros

                        <i class="bi bi-arrow-right"></i>

                    </span>

                </div>

            </a>

        </div>

    </div>

</div>


<!-- ESTILOS -->
<style>

    /* ================================
       CARRUSEL
    ================================= */

    .carousel-item {

        position: relative;

    }

    .carousel-item::after {

        content: "";

        position: absolute;

        inset: 0;

        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.65),
            rgba(0, 0, 0, 0.05)
        );

    }

    .carousel-caption {

        z-index: 2;

        bottom: 55px;

    }

    .carousel-text {

        max-width: 700px;

        margin: auto;

    }

    .carousel-text h2 {

        font-size: 2.3rem;

        font-weight: 700;

        text-shadow: 0 2px 5px rgba(0,0,0,.5);

    }

    .carousel-text p {

        font-size: 1.1rem;

        text-shadow: 0 1px 4px rgba(0,0,0,.6);

    }


    /* ================================
       TARJETAS
    ================================= */

    .admin-card {

        height: 100%;

        background: white;

        border: 1px solid #e5e5e5;

        border-radius: 15px;

        padding: 30px 25px;

        text-align: center;

        box-shadow: 0 4px 15px rgba(0,0,0,.06);

        transition: all .3s ease;

    }

    .admin-card:hover {

        transform: translateY(-7px);

        box-shadow: 0 10px 25px rgba(0,0,0,.12);

        border-color: #198754;

    }


    /* ================================
       ICONOS
    ================================= */

    .icon-container {

        width: 70px;

        height: 70px;

        margin: 0 auto 20px;

        border-radius: 50%;

        background-color: #eaf6ed;

        display: flex;

        align-items: center;

        justify-content: center;

        color: #198754;

        font-size: 32px;

        transition: all .3s ease;

    }

    .admin-card:hover .icon-container {

        background-color: #198754;

        color: white;

    }


    /* ================================
       TEXTO TARJETAS
    ================================= */

    .admin-card h4 {

        color: #198754;

        font-weight: 700;

        margin-bottom: 12px;

    }

    .admin-card p {

        color: #6c757d;

        font-size: .95rem;

        min-height: 48px;

    }

    .card-link {

        display: inline-block;

        margin-top: 10px;

        color: #198754;

        font-size: .9rem;

        font-weight: 600;

    }

    .card-link i {

        margin-left: 5px;

    }


    /* ================================
       RESPONSIVE
    ================================= */

    @media (max-width: 768px) {

        .carousel-text h2 {

            font-size: 1.6rem;

        }

        .carousel-text p {

            font-size: .9rem;

        }

    }

</style>

@endsection