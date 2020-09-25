<?php

namespace MayIFit\Core\Translation\Tests;

use Laravel\Sanctum\SanctumServiceProvider;
use Nuwave\Lighthouse\LighthouseServiceProvider;
use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;

use MayIFit\Core\Permission\PermissionServiceProvider;
use MayIFit\Core\Translation\TranslationServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use MakesGraphQLRequests;

    public function setUp(): void
    {
        parent::setUp();

        $this->publishResources();
        $this->artisan('migrate', ['--database' => 'testbench'])->execute();
    }

    protected function getPackageProviders($app)
    {
        return [
            SanctumServiceProvider::class,
            LighthouseServiceProvider::class,
            PermissionServiceProvider::class,
            TranslationServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        $app['config']->set('lighthouse.namespaces.models', 'Illuminate\\Foundation\\Auth');
    }

    protected function publishResources()
    {
        $this->artisan('vendor:publish', [
            '--provider' => 'Nuwave\\Lighthouse\\LighthouseServiceProvider',
            '--force' => true
        ])->execute();

        $this->artisan('vendor:publish', [
            '--provider' => 'MayIFit\\Core\\Translation\\TranslationServiceProvider',
            '--tag' => 'schema',
            '--force' => true
        ])->execute();

        $this->artisan('vendor:publish', [
            '--provider' => 'MayIFit\\Core\\Permission\\PermissionServiceProvider',
            '--tag' => 'schema',
            '--force' => true,
        ])->run();


        file_put_contents(
            $this->app['config']->get('lighthouse.schema.register'),
            '
#import core/*.graphql
#import extensions/*.graphql

type User {
    id: ID!
    name: String
    email: String!
}

input CreateUserInput {
    name: String!
    email: String!
    password: String! @hash
}

input UpdateUserInput {
    id: ID!
    name: String
    email: String
    password: String @hash
}

type Query

type Mutation
        '
        );
    }
}
