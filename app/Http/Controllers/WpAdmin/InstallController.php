<?php

namespace App\Http\Controllers\WpAdmin;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class InstallController extends BaseController
{
    public function edit()
    {
        return $this->runAdmin('install.php');
    }

    public function update()
    {
        return $this->runAdmin('install.php');
    }
}