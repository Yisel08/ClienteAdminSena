@extends('layouts.app')

@section('content')

<style>

    /* =========================
       QUIENES SOMOS
    ========================= */

    .about-page {
        background: #f8faf9;
        min-height: 100vh;
    }

    /* ENCABEZADO */

    .about-title {
        font-size: 42px;
        font-weight: 700;
        color: #198754;
    }

    .about-subtitle {
        color: #6c757d;
        font-size: 17px;
    }

    .title-line {
        width: 70px;
        height: 4px;
        background: #198754;
        margin: 15px auto;
        border-radius: 10px;
    }


    /* PRESENTACION */

    .presentation {
        background: white;
        border-radius: 18px;
        padding: 45px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.06);
        border: 1px solid #e9ecef;
    }

    .presentation h2 {
        color: #198754;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .presentation p {
        color: #495057;
        line-height: 1.8;
        font-size: 16px;
    }

    .presentation-icon {
        font-size: 25px;
        color: #198754;
        margin-right: 8px;
    }


    /* LOGO */

    .logo-container {
        padding: 25px;
    }

    .logo-sena {
        width: 200px;
        transition: transform 0.3s ease;
    }

    .logo-sena:hover {
        transform: scale(1.05);
    }


    /* TARJETAS */

    .info-card {
        background: white;
        border: none;
        border-radius: 18px;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 8px 25px rgba(0,0,0,0.07);
        transition: all 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
    }


    /* CABECERA TARJETAS */

    .info-header {
        background: linear-gradient(135deg, #198754, #157347);
        color: white;
        padding: 22px;
        text-align: center;
    }

    .info-header i {
        font-size: 28px;
        margin-right: 8px;
    }

    .info-header h3 {
        display: inline;
        font-size: 24px;
        font-weight: 600;
    }


    /* CONTENIDO */

    .info-body {
        padding: 30px;
        text-align: center;
    }

    .info-body p {
        color: #495057;
        line-height: 1.9;
        margin: 0;
        font-size: 15.5px;
    }


    /* TITULO SECCION */

    .section-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .section-title h2 {
        color: #198754;
        font-weight: 700;
    }

    .section-title p {
        color: #6c757d;
    }

</style>


<div class="about-page">

    <div class="container py-5">

        <!-- =========================
             ENCABEZADO
        ========================== -->

        <div class="text-center mb-5">

            <h1 class="about-title">
                ¿Quiénes somos?
            </h1>

            <p class="about-subtitle">
                Servicio Nacional de Aprendizaje - SENA
            </p>

            <div class="title-line"></div>

        </div>


        <!-- =========================
             PRESENTACIÓN
        ========================== -->

        <div class="presentation mb-5">

            <div class="row align-items-center">

                <!-- TEXTO -->

                <div class="col-md-7">

                    <h2>
                        <i class="bi bi-building presentation-icon"></i>
                        SENA
                    </h2>

                    <p>
                        El Servicio Nacional de Aprendizaje (SENA) es una
                        entidad pública de Colombia que ofrece formación
                        profesional integral para contribuir al desarrollo
                        social, económico y tecnológico del país.
                    </p>

                    <p>
                        A través de sus programas de formación, el SENA
                        brinda a los colombianos oportunidades para fortalecer
                        sus conocimientos, habilidades y competencias,
                        preparándolos para el mundo laboral y el emprendimiento.
                    </p>

                </div>


                <!-- LOGO -->

                <div class="col-md-5 text-center">

                    <div class="logo-container">

                        <img 
                            src="{{ asset('images/logo-sena.png') }}"
                            alt="Logo SENA"
                            class="logo-sena"
                        >

                    </div>

                </div>

            </div>

        </div>



        <!-- =========================
             TITULO MISION / VISION
        ========================== -->

        <div class="section-title">

            <h2>
                Nuestra identidad institucional
            </h2>

            <p>
                Principios que orientan la labor del SENA
            </p>

        </div>



        <!-- =========================
             MISION Y VISION
        ========================== -->

        <div class="row g-4">


            <!-- =====================
                 MISION
            ====================== -->

            <div class="col-md-6">

                <div class="info-card">

                    <div class="info-header">

                        <i class="bi bi-bullseye"></i>

                        <h3>
                            Misión
                        </h3>

                    </div>


                    <div class="info-body">

                        <p>
                            El SENA está encargado de cumplir la función que
                            le corresponde al Estado de invertir en el desarrollo
                            social y técnico de los trabajadores colombianos,
                            ofreciendo y ejecutando la formación profesional
                            integral para la incorporación y el desarrollo de
                            las personas en actividades productivas que
                            contribuyan al desarrollo social, económico y
                            tecnológico del país.
                        </p>

                    </div>

                </div>

            </div>



            <!-- =====================
                 VISION
            ====================== -->

            <div class="col-md-6">

                <div class="info-card">

                    <div class="info-header">

                        <i class="bi bi-eye"></i>

                        <h3>
                            Visión
                        </h3>

                    </div>


                    <div class="info-body">

                        <p>
                            El SENA busca ser reconocido por la efectividad
                            de su gestión, la calidad de sus programas de
                            formación y por contribuir al desarrollo de las
                            personas, las empresas y el país mediante la
                            formación profesional integral, la innovación
                            y el fortalecimiento de las competencias.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             CIERRE
        ========================== -->

        <div class="text-center mt-5">


    </div>

</div>

@endsection