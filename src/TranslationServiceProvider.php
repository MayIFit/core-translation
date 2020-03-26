<?php
    namespace MayIFit\Core\Translation;

    use Illuminate\Support\ServiceProvider;

    class TranslationServiceProvider extends ServiceProvider {

        /**
         * The policy mappings for the application.
         *
         * @var array
         */

        public function boot() {
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        }

        public function register() {
            $this->app->bind('translation', function () {
                return new Translation();
            });
        }
    }
?>