<?php

use App\Support\FileStreamRoutes;

// 1. Auth
// 2. Dashboard
// 3. Setup
// 4. Admin
// 5. Posts

$router->group(['prefix' => config('wordpress.url.backend_prefix')], function ($router) {

##########################
    $prefix = 'wp-admin';
    $adminUrl = config('wordpress.url.backend').'/'.$prefix.'/';
##########################

// 1. Auth

// Login Gate
// ?action = ['postpass', 'logout', logout', 'lostpassword', 'retrievepassword', 'resetpass', 'rp', 'register']
    $router->get('wp-login.php', 'LoginController@create');
    $router->post('wp-login.php', 'LoginController@store');

    if (config('wordpress.url.backend') != config('wordpress.url.site')) {
        $router->get('', function () use ($adminUrl) {
            return redirect()->to($adminUrl);
        });
    }

    $router->get('login', 'LoginController@create');

    $router->get('admin', function () use ($adminUrl) {
        return redirect()->to($adminUrl);
    });
    $router->get('dashboard', function () use ($adminUrl) {
        return redirect()->to($adminUrl);
    });

    $router->group(['prefix' => $prefix], function ($router) {

        // 2. Dashboard
        $router->get('/', ['as' => 'wordpress.admin.dashboard', 'uses' => 'DashboardController@show']);
        $router->get('index.php', function () {
            return redirect()->route('wordpress.admin.dashboard');
        });

        // 3. Setup
        $router->get('setup-config.php', 'SetupController@edit');
        $router->post('setup-config.php', 'SetupController@update');

        $router->get('install.php', 'InstallController@edit');
        $router->post('install.php', 'InstallController@update');

        // 4. Admin
        $router->get('admin-ajax.php', 'AjaxAdminController@edit');
        $router->post('admin-ajax.php', 'AjaxAdminController@update');

        // 5. Posts
        $router->get('edit.php', 'PostsController@index');
        $router->post('post.php', 'PostsController@update');

        $router->get('load-styles.php', 'FileController@loadStyles');
        $router->get('load-scripts.php', 'FileController@loadScripts');

//        $router->get('/{script}.php', 'AdminController@load');
        $router->post('/{script}.php', 'AdminController@load');

        FileStreamRoutes::get($router);
    });

    $router->group(['prefix' => 'wp-content'], function ($router) {
        FileStreamRoutes::get($router);
    });

    $router->group(['prefix' => 'wp-includes'], function ($router) {

        $router->get('js/tinymce/wp-mce-help.php', 'AdminController@runPhpScript');
        $router->get('js/tinymce/wp-tinymce.php', 'AdminController@runPhpScript');

        FileStreamRoutes::get($router);
    });

});