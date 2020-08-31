<?php

namespace MayIFit\Core\Translation;

use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use MayIFit\Core\Translation\Models\Translation;
use MayIFit\Core\Translation\Policies\TranslationPolicy;
use MayIFit\Core\Translation\Observers\TranslationObserver;

/**
 * Class TranslationServiceProvider
 *
 * @package MayIFit\Core\Translation
 */
class TranslationServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Translation::class => TranslationPolicy::class,
    ];

    /**
     * The seed folder for the package.
     *
     * @var array
     */
    protected $database_folder = '/Database';

    /**
     * Bootstrap any application services.
     */
    public function boot(ConfigRepository $configRepository): void
    {
        $this->loadMigrationsFrom(__DIR__ . $this->database_folder . '/migrations');
        $this->mergeConfigFrom(__DIR__ . '/core-translation.php', 'core-translation');
        $this->publishResources($configRepository);
        $this->registerPolicies();
        $this->registerObservers();
    }

    /**
     * Publish resources
     *
     * @return void
     */
    protected function publishResources(ConfigRepository $configRepository): void
    {
        $this->publishes([
            __DIR__ . '/core-translation.php' => $this->app->configPath() . '/core-translation.php',
        ], 'config');

        $this->publishes([
            __DIR__ . '/GraphQL/schema' => $configRepository->get('core-translation.schema.register'),
        ], 'schema');

        $this->publishes([
            __DIR__ . '/GraphQL/Queries' => $configRepository->get('core-translation.queries.register'),
        ], 'graphql');

        $this->publishes([
            __DIR__ . '/GraphQL/Scalars' => $configRepository->get('core-translation.scalars.register'),
        ], 'graphql');
    }

    /**
     * Register model observers.
     *
     * @return void
     */
    private function registerObservers(): void
    {
        Translation::observe(TranslationObserver::class);
    }
}
