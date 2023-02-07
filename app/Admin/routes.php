<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('slides', SlideController::class);
    $router->resource('pages', PageController::class);
    $router->resource('page-tags', PageTagController::class);
    $router->resource('articles', ArticleController::class);
});
