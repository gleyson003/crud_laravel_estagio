<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Motorista;
use Illuminate\Support\Facades\Redirect;

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

//Create
Route::get('/motoristas/cadastro', function () {
    return view('cadastro');
});

Route::post('/cadastro', function(Request $cadastro)
{
    Motorista::create([
        'nome' => $cadastro->nome_do_motorista,
        'cpf' => $cadastro->cpf,
        'cnh' => $cadastro->cnh,
    ]);
    return redirect('/');
});

//Read
Route::get('/', function ()
{
    $motoristas = Motorista::all();
    return view('welcome', ['motoristas' => $motoristas]);
});

//Update
Route::get('/motoristas/alterar/{id_motorista}', function($id_motorista)
{
    $motorista = Motorista::findOrFail($id_motorista);
    return view('alterar_motorista', ['motorista' => $motorista]);
});

Route::get('/motoristas/atualizar/{id_motorista}', function(Request $cadastro , $id_motorista)
{
    $motorista = Motorista::findOrFail($id_motorista);
    $motorista->nome = $cadastro->nome_do_motorista;
    $motorista->cpf = $cadastro->cpf;
    $motorista->cnh = $cadastro->cnh;
    $motorista->save();
    return redirect('/');
});

//Delete
Route::get('/motoristas/excluir/{id_motorista}', function($id_motorista)
{
    $motorista = Motorista::findOrFail($id_motorista);
    $motorista->delete();
    return redirect('/');
});
