<?php
namespace Tests;

use Laravel\Lumen\Testing\TestCase as AbstractTestCase;
/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
abstract class TestCase extends AbstractTestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }
}
