
    @extends('layouts.principal')
    @section('titulo')
    Ciclos
    @endsection
    @section('contenido')
        @if (count($ciclos) == 0)
        <div class="alert alert-primary" role="alert">
            Todavía no hay ciclos. Prueba a añadirlos.
          </div>
        @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">SIGLAS</th>
                        <th scope="col">NOMBRE</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($ciclos as $ciclo)
            <tr>
                <td scope="row">{{ $ciclo->getId() }}</td>
                <td>{{ $ciclo->getSiglas() }}</td>
                <td>{{ $ciclo->getNombre() }}</td>
                <td>
                    <form action="{{ action([App\Http\Controllers\ControladorCiclo::class, 'destroy'], ['id' => $ciclo->getId()]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <a href="{{ url('/ciclos/create') }}" class="btn btn-primary">Añadir</a>
    @endsection
