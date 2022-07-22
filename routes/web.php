<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Motorista;


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
    return view('welcome');
});

//Create
Route::post('/cadastro', function(Request $cadastro)
{
    Motorista::create([
        'nome' => $cadastro->nome_do_motorista,
        'cpf' => $cadastro->cpf,
        'cnh' => $cadastro->cnh,
    ]);
    echo 'Motorista cadastrado com sucesso!';
});

//Read
Route::get('/motoristas', function()
{
    $motoristas = Motorista::all();
    echo "Lista de motoristas cadastrados <br><br>";
    foreach($motoristas as $motorista)
    {
        echo "Nome: $motorista->nome <br> ID: $motorista->id <br> CPF: $motorista->cpf <br> CNH: $motorista->cnh <br><br>";
    };
});

//Update
Route::get('/motoristas/alterar/{id_motorista}', function($id_motorista)
{
    $motorista = Motorista::findOrFail($id_motorista);
    return view('alterar_motorista', ['motorista' => $motorista]);
});

Route::put('/motoristas/atualizar/{id_motorista}', function(Request $cadastro , $id_motorista)
{
    $motorista = Motorista::findOrFail($id_motorista);
    $motorista->nome = $cadastro->nome_do_motorista;
    $motorista->cpf = $cadastro->cpf;
    $motorista->cnh = $cadastro->cnh;
    $motorista->save();
    echo 'Dados do motorista alterados com sucesso!';

});

//Delete
Route::get('/motoristas/excluir/{id_motorista}', function($id_motorista)
{
    $motorista = Motorista::findOrFail($id_motorista);
    $motorista->delete();
    echo 'Dados do motorista excluido com sucesso!';
});
