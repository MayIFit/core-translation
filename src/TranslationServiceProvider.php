<?php
    namespace MayIFit\Core\Translation;

    use Illuminate\Support\ServiceProvider;

    use MayIFit\Core\Permission\Models\Permission; 
    use MayIFit\Core\Permission\Policies\PermissionPolicy; 

    class TranslationServiceProvider extends ServiceProvider {

        /**
         * The policy mappings for the application.
         *
         * @var array
         */
        protected $policies = [
            Translation::class => TranslationPolicy::class,
        ];

        public function boot() {
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
            $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        }

        public function register() {
            $this->app->bind('translation', function () {
                return new Translation();
            });
        }
    }
?>