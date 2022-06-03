
    @extends('layouts.principal')
    @section('titulo')
    Cursos
    @endsection

    @section('contenido')
        <!-- recorrer el array para imprimir los cursos -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">SIGLAS</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">SIGLAS CICLO</th>
                  </tr>
            </thead>
            <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td scope="row">{{ $curso->getId() }}</td>
                    <td>{{ $curso->getSiglas() }}</td>
                    <td>{{ $curso->getNombre() }}</td>
                    <td>{{ $curso->getSiglasCiclo() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection