@extends('layouts.app')

@section('content')

    <h1>LISTAR CENTROS DE FORMACION</h1>

    <div class="container">

        <a href="#" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo centro de formacion
        </a>

        <br>
        <br>

        <table id="idTraining_center" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Detalle</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($centers as $center)

                    <tr>

                        <td>{{ $center['id'] }}</td>

                        <td>{{ $center['name'] }}</td>

                        <td>{{ $center['location'] }}</td>

                        <td>
                            <a href="#" class="btn btn-info">
                                Mostrar
                            </a>
                        </td>

                        <td>
                            <a href="#" class="btn btn-warning">
                                Editar
                            </a>
                        </td>

                        <td>
                            <button type="button" class="btn btn-danger">
                                Eliminar centro
                            </button>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection