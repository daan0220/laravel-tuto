<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . 'Admin',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', \App\Admin\Controllers\AdminUserController::class);

});
