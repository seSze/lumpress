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

use App\Models\Post;

$router->get('/', function () use ($router) {

    $s = \App\Models\Page::published()->get()->toArray();


    dump($s);die();
    
    return $router->app->version();
});

// Post list
// show post
// show category
// show tag
foreach (config('wordpress.posts.routes') as $postType => $data) {
    $router->get($data['route'], 'PostsController@show');
}
//$router->get(config('wordpress.posts.routes.post.route'), 'PostsController@show');