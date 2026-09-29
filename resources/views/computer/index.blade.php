@extends('layouts.app')

@section('content')

<h1>LISTAR COMPUTADORES</h1>

<div class="container">

    <a href="{{ route('computer.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i>
        Nuevo computador
    </a>

    <table id="idComputer" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Marca</th>
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
                        <a href="{{ route('computer.show', $computer['id']) }}">
                            Mostrar
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('computer.edit', $computer['id']) }}">
                            Editar
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('computer.destroy', $computer['id']) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-success">
                                Eliminar computador
                            </button>

                        </form>
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection