<?php

use App\User;
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

$user = User::find(1);

dd($user);
dd($user->hasRole('web-developer')); //вернёт true
dd($user->hasRole('project-manager')); //вернёт false
dd($user->givePermissionsTo('manage-users')); //выдаём разрешение
dd($user->hasPermission('manage-users')); //вернёт true

Route::get('/', function () {
    return view('welcome');
});
