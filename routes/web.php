<?php
////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////PHP ARTISAN ROUTE:LIST//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

use App\Clases\Ciclo;
use App\Clases\Curso;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


// Route::get('/ciclos', function () {
//     $ciclo1 = new Ciclo(1, 'DAW1A', 'Desarrollo de Aplicaciones Web');
//     $ciclo2 = new Ciclo(2, 'DAM1A', 'Desarrollo de Aplicaciones Multiplataforma');
//     $ciclos = array();
//     array_push($ciclos, $ciclo1, $ciclo2);
//     $data['ciclos'] = $ciclos;
//     //llamar a la vista ciclos y pasarle el array por parámetro
//     return view('ciclos', $data);
// })->name('ciclos');

Route::get('/cursos', function () {
    $curso1 = new Curso(1, 'DAW1A', 'Desarrollo de Aplicaciones Web de primero mañana A', 'DAW');
    $curso2 = new Curso(2, 'DAW2A', 'Desarrollo de Aplicaciones Web de segundo mañana A', 'DAW');
    $curso3 = new Curso(3, 'DAM2B', 'Desarrollo de Aplicaciones Web de segundo mañana B', 'DAW');
    $cursos = array();
    array_push($cursos, $curso1, $curso2, $curso3);
    $data['cursos'] = $cursos;
    //llamar a la vista cursos y pasarle el array por parámetro
    return view('cursos', $data);
})->name('cursos');

Route::get('/ciclos', [App\Http\Controllers\ControladorCiclo::class, 'index'])->name('ciclos');
Route::post('/ciclos', [App\Http\Controllers\ControladorCiclo::class, 'store']);
Route::get('/ciclos/create', [App\Http\Controllers\ControladorCiclo::class, 'create']);
Route::delete('/ciclos/{id}', [App\Http\Controllers\ControladorCiclo::class, 'destroy']);