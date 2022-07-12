<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'InicioController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/test', function () {
    return view('welcome1');
    //$user = User::find(2);

    //$user->roles()->sync([2]);
    //Gate::authorize('haveaccess', 'role.show');
    //return $user;
    //return $user->havePermission('role.create');

});

Route::resource('/role', 'RoleController')->names('role');
//Route::resource('/user', 'UserController',['except'=>['create','store']])->names('user');
Route::resource('/user', 'UserController')->names('user');
Route::resource('/position', 'PositionController')->names('position');
Route::resource('/period', 'PeriodController')->names('period');
Route::resource('/distributive', 'DistributiveController')->names('distributive');
Route::resource('/rule', 'RuleController')->names('rule');
Route::resource('/asigne', 'AsigneController')->names('asigne');
Route::resource('/export', 'ExportController')->names('export');