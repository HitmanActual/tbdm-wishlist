<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function() use($router)
{

    $router->get('wishlists','WishlistController@index');
    $router->post('wishlists','WishlistController@store');
    $router->get('wishlists/{wishlist}','WishlistController@show');
    $router->put('wishlists/{wishlist}','WishlistController@update');
    $router->patch('wishlists/{wishlist}','WishlistController@update');
    $router->delete('wishlists/{wishlist}','WishlistController@destroy');
    $router->delete('wishlists/{wishlist}','WishlistController@destroy');
});