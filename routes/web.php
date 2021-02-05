<?php

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
/*
Route::get('/', function () {
    return view('auth\login');
});*/

Route::get('atividades', 'Activity\ActivityController@atividades')->middleware('auth');
Route::get('submeter', 'Activity\ActivityController@pagForm')->middleware('auth');

Route::post('submeter/form1/salvar', 'Activity\ActivityController@form1')->name('submeter1')->middleware('auth');
Route::post('submeter/form2/salvar', 'Activity\ActivityController@form2')->name('submeter2')->middleware('auth');
Route::post('submeter/form3/salvar', 'Activity\ActivityController@form3')->name('submeter3')->middleware('auth');
Route::post('submeter/form4/salvar', 'Activity\ActivityController@form4')->name('submeter4')->middleware('auth');
Route::post('submeter/form5/salvar', 'Activity\ActivityController@form5')->name('submeter5')->middleware('auth');
Route::post('submeter/form6/salvar', 'Activity\ActivityController@form6')->name('submeter6')->middleware('auth');
Route::post('submeter/form7/salvar', 'Activity\ActivityController@form7')->name('submeter7')->middleware('auth');
Route::post('submeter/form8/salvar', 'Activity\ActivityController@form8')->name('submeter8')->middleware('auth');
Route::post('submeter/form9/salvar', 'Activity\ActivityController@form9')->name('submeter9')->middleware('auth');
Route::post('submeter/form10/salvar', 'Activity\ActivityController@form10')->name('submeter10')->middleware('auth');
Route::post('submeter/form11/salvar', 'Activity\ActivityController@form11')->name('submeter11')->middleware('auth');
Route::post('submeter/form12/salvar', 'Activity\ActivityController@form12')->name('submeter12')->middleware('auth');
Route::post('submeter/form13/salvar', 'Activity\ActivityController@form13')->name('submeter13')->middleware('auth');
Route::post('submeter/form14/salvar', 'Activity\ActivityController@form14')->name('submeter14')->middleware('auth');

Route::get('atividades/form1/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm1')->middleware('auth');
Route::get('atividades/form2/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm2')->middleware('auth');
Route::get('atividades/form3/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm3')->middleware('auth');
Route::get('atividades/form4/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm4')->middleware('auth');
Route::get('atividades/form5/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm5')->middleware('auth');
Route::get('atividades/form6/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm6')->middleware('auth');
Route::get('atividades/form7/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm7')->middleware('auth');
Route::get('atividades/form8/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm8')->middleware('auth');
Route::get('atividades/form9/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm9')->middleware('auth');
Route::get('atividades/form10/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm10')->middleware('auth');
Route::get('atividades/form11/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm11')->middleware('auth');
Route::get('atividades/form12/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm12')->middleware('auth');
Route::get('atividades/form13/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm13')->middleware('auth');
Route::get('atividades/form14/excluir/{id}', 'Activity\ActivityController@excluirAtividadeForm14')->middleware('auth');

Route::get('atividades/lista/{id}', 'HomeController@listActivities')->name('lista_atividades')->middleware('auth');

Route::post('editar/form1/salvar', 'Activity\ActivityController@editarForm1')->middleware('auth');
Route::post('editar/form2/salvar', 'Activity\ActivityController@editarForm2')->middleware('auth');
Route::post('editar/form3/salvar', 'Activity\ActivityController@editarForm3')->middleware('auth');
Route::post('editar/form4/salvar', 'Activity\ActivityController@editarForm4')->middleware('auth');
Route::post('editar/form5/salvar', 'Activity\ActivityController@editarForm5')->middleware('auth');
Route::post('editar/form6/salvar', 'Activity\ActivityController@editarForm6')->middleware('auth');
Route::post('editar/form7/salvar', 'Activity\ActivityController@editarForm7')->middleware('auth');
Route::post('editar/form8/salvar', 'Activity\ActivityController@editarForm8')->middleware('auth');
Route::post('editar/form9/salvar', 'Activity\ActivityController@editarForm9')->middleware('auth');
Route::post('editar/form10/salvar', 'Activity\ActivityController@editarForm10')->middleware('auth');
Route::post('editar/form11/salvar', 'Activity\ActivityController@editarForm11')->middleware('auth');
Route::post('editar/form12/salvar', 'Activity\ActivityController@editarForm12')->middleware('auth');
Route::post('editar/form13/salvar', 'Activity\ActivityController@editarForm13')->middleware('auth');
Route::post('editar/form14/salvar', 'Activity\ActivityController@editarForm14')->middleware('auth');

Route::get('atividades/form1/editar/{id}/{idUser}', 'Activity\ActivityController@form1Edicao')->middleware('auth');
Route::get('atividades/form2/editar/{id}/{idUser}', 'Activity\ActivityController@form2Edicao')->middleware('auth');
Route::get('atividades/form3/editar/{id}/{idUser}', 'Activity\ActivityController@form3Edicao')->middleware('auth');
Route::get('atividades/form4/editar/{id}/{idUser}', 'Activity\ActivityController@form4Edicao')->middleware('auth');
Route::get('atividades/form5/editar/{id}/{idUser}', 'Activity\ActivityController@form5Edicao')->middleware('auth');
Route::get('atividades/form6/editar/{id}/{idUser}', 'Activity\ActivityController@form6Edicao')->middleware('auth');
Route::get('atividades/form7/editar/{id}/{idUser}', 'Activity\ActivityController@form7Edicao')->middleware('auth');
Route::get('atividades/form8/editar/{id}/{idUser}', 'Activity\ActivityController@form8Edicao')->middleware('auth');
Route::get('atividades/form9/editar/{id}/{idUser}', 'Activity\ActivityController@form9Edicao')->middleware('auth');
Route::get('atividades/form10/editar/{id}/{idUser}', 'Activity\ActivityController@form10Edicao')->middleware('auth');
Route::get('atividades/form11/editar/{id}/{idUser}', 'Activity\ActivityController@form11Edicao')->middleware('auth');
Route::get('atividades/form12/editar/{id}/{idUser}', 'Activity\ActivityController@form12Edicao')->middleware('auth');
Route::get('atividades/form13/editar/{id}/{idUser}', 'Activity\ActivityController@form13Edicao')->middleware('auth');
Route::get('atividades/form14/editar/{id}/{idUser}', 'Activity\ActivityController@form14Edicao')->middleware('auth');

Route::get('atividades/arquivos/{nameFile}', 'Activity\ActivityController@exibirPDF')->middleware('auth')->name('exibirPdf');

Route::get('atividades/documento-final/{id}', 'DynamicPDFController@docFinal')->name('docs.doc_final');


Auth::routes(['register' => true]);

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/rota-protegida', 'AlgumControlador@metodo')->middleware('auth');
