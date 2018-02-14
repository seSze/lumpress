<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class AppServiceProviderTest extends TestCase
{
    const WORDPRESS_SETTINGS_KEY = 'wordpress';

    const ARRAY_KEYS = [
        'url', 'auth', 'noce'
    ];

    const ARRAY_SUBSET = [
        'key' => '',
        'salt' => ''
    ];

    /**
     * @test
     */
    public function it_sets_up_wordpress_configuration()
    {
        $this->assertInternalType('array', config($this->getKey()));

        foreach (static::ARRAY_KEYS as $key) {
            $this->assertArrayHasKey($key, config($this->getKey()));
        }
        
        $this->assertArraySubset(static::ARRAY_SUBSET, config($this->getKey('auth')));
    }

    /**
    * @test
    */
    public function it_sets_up_services_configuration()
    {
        $this->assertInternalType('array', config('services'));
    }

    /**
     * @param null|string $key
     * @return string
     */
    public function getKey(?string $key = null): string
    {
        $key = $key ? '.'.$key : '';

        return static::WORDPRESS_SETTINGS_KEY.$key;
    }
}