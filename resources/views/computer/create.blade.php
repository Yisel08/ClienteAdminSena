
@extends('layouts.app')

@section('content')

<h1>Formulario Computer</h1>

<form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>
        Numero:
        <br>
        <input type="number" name="number" value="{{ old('number') }}" required>
    </label>
    <br>
    <br>

    <label>
        Marca:
        <br>
        <input type="text" name="brand" value="{{ old('brand') }}" required>
    </label>
    <br>
    <br>

    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="file" name="urlFoto" class="form-control" accept="image/*">
    </div>

    <button type="submit" class="btn btn-outline-success btn-sm">
        Enviar Formulario
    </button>

</form>

@endsection
