@extends('layouts.principal')

@section('contenido')
<form action="{{ action([App\Http\Controllers\ControladorCiclo::class, 'store']) }}" method="POST">
   @csrf
    <header class="secondary">
        <p>Ciclo</p>
    </header>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Identificador</label>
    <input type="number" class="form-control" id="id" name="id" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Sigla</label>
    <input type="text" class="form-control" id="siglas" name="siglas">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <button type="submit" class="btn btn-primary">Confirmar</button>
</form>

@endsection