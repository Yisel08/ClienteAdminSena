@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Encabezado -->
    <div class="text-center mb-5">

        <h1 class="text-success fw-bold">
            Contáctanos
        </h1>

        <p class="text-muted">
            Estamos aquí para ayudarte
        </p>

    </div>


    <div class="row justify-content-center">

        <div class="col-md-9">

            <div class="card shadow-sm border-0">

                <div class="card-body p-4">

                    <h4 class="text-success fw-bold mb-4">
                        Información de contacto
                    </h4>


                    <!-- Información de contacto -->

                    <div class="row mb-4">

                        <!-- Ubicación -->
                        <div class="col-md-4 mb-3">

                            <div class="d-flex align-items-start">

                                <div class="me-3 text-success fs-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>

                                <div>
                                    <h6 class="fw-bold mb-1">
                                        Ubicación
                                    </h6>

                                    <p class="text-muted mb-0">
                                        Centro de comercio y servicios
                                    </p>
                                </div>

                            </div>

                        </div>


                        <!-- Teléfono -->
                        <div class="col-md-4 mb-3">

                            <div class="d-flex align-items-start">

                                <div class="me-3 text-success fs-3">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>

                                <div>
                                    <h6 class="fw-bold mb-1">
                                        Teléfono
                                    </h6>

                                    <p class="text-muted mb-0">
                                        100 364 283
                                    </p>
                                </div>

                            </div>

                        </div>


                        <!-- Correo -->
                        <div class="col-md-4 mb-3">

                            <div class="d-flex align-items-start">

                                <div class="me-3 text-success fs-3">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>

                                <div>
                                    <h6 class="fw-bold mb-1">
                                        Correo electrónico
                                    </h6>

                                    <p class="text-muted mb-0">
                                        contacto@adminsena.com
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>


                    <hr class="my-4">


                    <!-- Formulario -->

                    <h5 class="fw-bold mb-4">
                        Envíanos un mensaje
                    </h5>

                    <form>

                        <div class="row">

                            <!-- Nombre -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    Nombre
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Escribe tu nombre"
                                >

                            </div>


                            <!-- Correo -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    Correo electrónico
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="correo@ejemplo.com"
                                >

                            </div>

                        </div>


                        <!-- Mensaje -->
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Mensaje
                            </label>

                            <textarea
                                class="form-control"
                                rows="5"
                                placeholder="Escribe tu mensaje"
                            ></textarea>

                        </div>


                        <!-- Botón -->
                        <button
                            type="submit"
                            class="btn btn-success px-4"
                        >
                            <i class="bi bi-send-fill me-2"></i>
                            Enviar mensaje
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection