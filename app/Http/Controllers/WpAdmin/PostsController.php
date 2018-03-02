<?php

namespace App\Http\Controllers\WpAdmin;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class PostsController extends BaseController
{
    /**
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector|string
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    public function index()
    {
        if (app('request')->get('post_type') == 'Array') {
            $url = str_replace('&post_type=Array', '', app('request')->fullUrl());

            return redirect($url);
        }

        return $this->runAdminWithMenu('edit.php');
    }

    /**
     * @return string
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    public function update()
    {
//        $message = app('request')->get('message');
//
//        if ($message == "1" || $message = "6") {
//            // post updated
//        }
        return $this->runAdminWithMenu('edit.php');
    }

    public function create()
    {
        $this->runAdminWithMenu('post-new.php');
    }

    public function store()
    {
        $this->runAdminWithMenu('post-new.php');
    }
}