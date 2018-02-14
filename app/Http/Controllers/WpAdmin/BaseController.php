<?php

namespace App\Http\Controllers\WpAdmin;

use App\Http\Controllers\Controller;
use App\Support\ThemeBladeDirectory;
use App\Support\Traits\WordPressBootstrapTrait;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class BaseController extends Controller
{
    use WordPressBootstrapTrait;

    public function __construct()
    {
        $this->middleware('wp-admin');
        app('view')->addNamespace('theme', ThemeBladeDirectory::get());
    }
}