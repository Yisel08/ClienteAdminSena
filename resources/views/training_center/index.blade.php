@extends('layouts.app')

@section('content')

    <h1>LISTAR CENTROS DE FORMACION</h1>

    <div class="container">

        <a href="{{ route('training_center.create') }}" class="btn btn-success">
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
                            <a href="{{ route('training_center.show', $center['id']) }}" class="btn btn-success">
                                Mostrar
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('training_center.edit', $center['id']) }}" class="btn btn-success">
                                Editar
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('training_center.destroy', $center['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success">
                                    Eliminar centro
                                </button>
                            </form>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection