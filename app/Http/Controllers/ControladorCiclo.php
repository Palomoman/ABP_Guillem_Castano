<?php

namespace App\Http\Controllers;
use App\Clases\Ciclo;
use Illuminate\Http\Request;


class ControladorCiclo extends Controller
{
    public function index(Request $request)
    {
        //la primera vez entrará en el else porque no va a encontrar la variable 'ciclos'.
        //a partir de la segunda, ya encontrará la sesión.
        if ($request->session()->exists('ciclos')) {
            $ciclos = $request->session()->get('ciclos');
        }
        else {
            $ciclos = array();
        }

        $request->session()->put('ciclos', $ciclos);
        return view('ciclos', compact('ciclos'));
    }

    public function create()
    {
        //como la vista está dentro de la misma carpeta, la podemos llamar sin escribir nada más
        return view('crearCiclo');
    }

    public function store(Request $request)
    {
        //cogemos toda la info que hay en el form
        $id = $request->input('id');
        $siglas = $request->input('siglas');
        $nombre = $request->input('nombre');
        $ciclos = $request->session()->get('ciclos');
        //creamos un ciclo con esa info
        $ciclo = new Ciclo($id, $siglas, $nombre);
        //metemos el ciclo en nuestro array de ciclos
        array_push($ciclos, $ciclo);
        //machacamos el array que había en la sesión. lo "actualizamos"
        $request->session()->put('ciclos', $ciclos);
        //redireccionamos a la vista index
        return redirect()->action([ControladorCiclo::class, 'index']);
    }

    public function destroy($id, Request $request)
    {
        //recuperamos el array de ciclos de la sesión
        $ciclos = $request->session()->get('ciclos');
        //buscamos dentro de ese array el id que queremos borrar
        foreach ($ciclos as $key => $ciclo) {
            if ($ciclo->getId() == $id) {
                //hacemos borramos 1 casilla (1), donde el id es igual al id que queremos borrar
                array_splice($ciclos, $key, 1);
            }
        }
        //machacamos el array que había en la sesión (actualizamos) y redireccionamos a la vista index
        $request->session()->put('ciclos', $ciclos);
        return redirect()->action([ControladorCiclo::class, 'index']);
    }
}
