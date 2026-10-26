
@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1 class="mb-4">LISTAR COMPUTADORES</h1>

    <div class="mb-3">
        <a href="{{ route('computer.create') }}" class="btn btn-outline-success btn-sm">
            <i class="bi bi-plus-circle"></i>
            Nuevo computador
        </a>
    </div>

    <table id="idComputer" class="table table-striped table-bordered" style="width:100%">

        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Marca</th>
                <th>Imagen</th>
                <th>Detalle</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($computers as $computer)

                <tr>

                    <td>{{ $computer['id'] }}</td>

                    <td>{{ $computer['number'] }}</td>

                    <td>{{ $computer['brand'] }}</td>

                    <td>
                        @if (!empty($computer['urlFoto']))
                            <img src="{{ $computer['urlFoto'] }}" alt="Computador" width="80">
                        @else
                            Sin imagen
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('computer.show', $computer['id']) }}" class="btn btn-info btn-sm">
                            Mostrar
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('computer.edit', $computer['id']) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('computer.destroy', $computer['id']) }}" method="POST"
                            onsubmit="return confirm('¿Estás seguro de eliminar este computador?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                                Eliminar
                            </button>

                        </form>
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection
