<?php

namespace App\Models;

use App\Support\WordPress\PostModel;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class Page extends PostModel
{
    protected $postType = 'page';
}