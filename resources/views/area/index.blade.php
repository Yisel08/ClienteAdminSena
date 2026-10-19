@extends('layouts.app')

@section('content')

<h1>LISTAR AREAS</h1>

<div class="container">
    <a href="{{ route('area.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i>
        Nueva area
    </a>

    <br><br>

<table id="idArea" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>

    <tbody>

    
        @foreach ($areas as $area)
            <tr>
                <td>{{ $area['id'] }}</td>
                <td>{{ $area['name'] }}</td>

                <td>
                    <a href="{{ route('area.show', $area['id']) }}">
                        Mostrar
                    </a>
                </td>

                <td>
                    <a href="{{ route('area.edit', $area['id']) }}">
                        Editar
                    </a>
                </td>

                <td>
                    <form action="{{ route('area.destroy', $area['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
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