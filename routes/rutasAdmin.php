<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

//RUTAS USUARIOS
Route::get('usuario-todos',[UserController::class,'todos'])->name('usuarios.todos');
Route::get('usuario-habilitados',[UserController::class,'habilitados'])->name('usuarios.habilitados');

//RUTAS ROLES
// Route::get('role-todos',[])->name('roles.todos');
// Route::get('role-habilitados','API\RoleController@habilitados')->name('roles.habilitados');
// Route::get('role-eliminados','API\RoleController@eliminados')->name('roles.eliminados');
