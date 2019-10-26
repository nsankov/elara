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
use \App\Components\RouteComponent;

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
    $routeComponent = new RouteComponent($request);

    app()->bind('DatabaseRoute', function() use ($routeComponent){
        return $routeComponent;
    });

    $controllerName = $routeComponent->getController();
    $actionName = $routeComponent->getAction();
    $name= "{$controllerName}@{$actionName}";



    \Illuminate\Support\Facades\Route::any('{path}')
        ->where('path', '[A-Za-zА-Яа-яёЁ\-\/]+')->uses($name);
} catch (Exception $e) {
    //abort(404, 'Routing not found');
}

