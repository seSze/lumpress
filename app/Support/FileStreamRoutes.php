<?php

namespace App\Support;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class FileStreamRoutes
{
    const ACTION = 'FileController@stream';

    /**
     * @param $router
     */
    public static function get($router)
    {
        // Files
        $router->get('{f1}', static::ACTION);
        $router->get('{f1}/{f2}', static::ACTION);
        $router->get('{f1}/{f2}/{f3}', static::ACTION);
        $router->get('{f1}/{f2}/{f3}/{f4}', static::ACTION);
        $router->get('{f1}/{f2}/{f3}/{f4}/{f5}', static::ACTION);
        $router->get('{f1}/{f2}/{f3}/{f4}/{f5}/{f6}', static::ACTION);
        $router->get('{f1}/{f2}/{f3}/{f4}/{f5}/{f6}/{f7}', static::ACTION);
        $router->get('{f1}/{f2}/{f3}/{f4}/{f5}/{f6}/{f7}/{f8}', static::ACTION);
        $router->get('{f1}/{f2}/{f3}/{f4}/{f5}/{f6}/{f7}/{f8}/{f9}', static::ACTION);
    }
}