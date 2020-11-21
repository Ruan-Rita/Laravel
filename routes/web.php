<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriarController;

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

Route::get('/',[CriarController::class, 'index'] );
Route::get('/Criar',[CriarController::class, 'create'] );
Route::get('/Funcionario',[CriarController::class, 'all'] );

Route::get('/login', function () {
    $nome = "ruan"; 
    $idade = 10;
    $arr = [1, 2, 3, 4, 5];
    $nomes = ['Ruan', 'Ritao', 'Rayn', 'Rento'];
    return view('conta', [
        'nome' => $nome,
        'idade' => $idade,
        'array' => $arr,
        'nomes' => $nomes]
    );
});

Route::get('/CriandoConta/', function (){
    });
// Route::get('/CriandoConta/{id}', function ($id){
//     return view('createAccount',['id'=> $id]);
// });

// Route::get('/CriarConta/{id?}', function ($id = null){
//     return view('createAccount',['id'=> $id]);
// });

// Route::get('/Conta?search=valor', function ($id = null){
//     $busca = request('search');
//     return view('createAccount',['busca'=> $busca]);
// });