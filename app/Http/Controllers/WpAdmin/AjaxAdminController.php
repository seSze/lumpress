<?php

namespace App\Http\Controllers\WpAdmin;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class AjaxAdminController extends BaseController
{
    /**
     * @return string
     */
    public function edit()
    {
        return $this->runAdmin('admin-ajax.php');
    }

    /**
     * @return string
     */
    public function update()
    {
        return $this->runAdmin('admin-ajax.php');
    }
}