<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        $app['config']->set('database.default', 'mongodb');
        $app['config']->set('database.connections', 'mongodb');
        $app['config']->set('database.connections.mongodb.host', 'localhost');
        $app['config']->set('database.connections.mongodb.port',  '27017');
        $app['config']->set('database.connections.mongodb.database',  'db-mileapp-test');
        $app['config']->set('database.connections.mongodb.collection',  'packages');

        return $app;
    }
}
