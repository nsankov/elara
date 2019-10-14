<?php

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
use App\Models;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/robot.txt', function () {
    abort(404, 'robot.txt not created');
});

Route::get('/test-route', function () {
    return dd(Models\Route::all());
});


$request = \Illuminate\Http\Request::createFromGlobals();

try {
    $routeComponent = new \App\Components\RouteComponent($request);
} catch (Exception $e) {
    abort(404, 'Routing not found');//ToDo лучше переписать на исключения и ловить их в одном месте и делать abort
}

app()->bind('DatabaseRoute', function() use ($routeComponent){
    return $routeComponent;
});

$controllerName = $routeComponent->getController();
$actionName = $routeComponent->getAction();
$name= "{$controllerName}@{$actionName}";



\Illuminate\Support\Facades\Route::any('{path}')
    ->where('path', '[A-Za-zА-Яа-яёЁ\-\/]+')->uses($name);
