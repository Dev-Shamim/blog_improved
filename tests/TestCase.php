<?php

namespace Tests;

use App\Providers\SidebarServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->app->register(SidebarServiceProvider::class);
    }
}
