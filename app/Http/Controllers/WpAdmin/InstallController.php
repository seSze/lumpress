<?php

namespace App\Http\Controllers\WpAdmin;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class InstallController extends BaseController
{
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function edit()
    {
        return $this->runAdmin('install.php');
    }

    /**
     * @return string
     */
    public function update()
    {
        return $this->runAdmin('install.php');
    }
}