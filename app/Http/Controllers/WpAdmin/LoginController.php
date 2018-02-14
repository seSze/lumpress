<?php

namespace App\Http\Controllers\WpAdmin;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class LoginController extends BaseController
{
    /**
     * @return string
     */
    public function create()
    {
        return $this->run('wp-login.php', [
            'wpdb',
            'current_site', // for wp-includes/ms-functions.php
            'user_login', 'error',
        ]);
    }

    /**
     * @return string
     */
    public function store()
    {
        return $this->run('wp-login.php', [
            'wpdb',
            'current_site', // for wp-includes/ms-functions.php
            'user_login', 'error',
        ]);
    }
}