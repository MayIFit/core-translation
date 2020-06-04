<?php
    namespace MayIFit\Core\Translation;

    use Illuminate\Console\Events\CommandFinished;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Event;
    use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Str;
    use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
    use Symfony\Component\Console\Output\ConsoleOutput;

    use MayIFit\Core\Translation\Models\Translation; 
    use MayIFit\Core\Translation\Policies\TranslationPolicy; 

    class TranslationServiceProvider extends ServiceProvider {

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

        public function boot() {
            $this->loadMigrationsFrom(__DIR__.$this->database_folder.'/migrations');
            if ($this->app->runningInConsole()) {
                if ($this->isConsoleCommandContains([ 'db:seed', '--seed' ], [ '--class', 'help', '-h' ])) {
                    $this->addSeedsAfterConsoleCommandFinished();
                }
            }
            $this->publishResources();
            $this->registerPolicies();
        }

        public function register() {
            $this->app->bind('translation', function () {
                return new Translation();
            });
        }

        /**
         * Publish resources
         *
         * @return void
         */
        protected function publishResources() {
            $this->publishes([
                __DIR__.'/GraphQL/schema' => './graphql/core',
            ]);
            $this->publishes([
                __DIR__.'/GraphQL/Scalars' => './app/GraphQL/Scalars/Core',
            ]);
            $this->publishes([
                __DIR__.'/GraphQL/Queries' => './app/GraphQL/Queries/Core',
            ]);
        }

        /**
         * Get a value that indicates whether the current command in console
         * contains a string in the specified $fields.
         *
         * @param string|array $contain_options
         * @param string|array $exclude_options
         *
         * @return bool
         */
        protected function isConsoleCommandContains($contain_options, $exclude_options = null) : bool {
            $args = Request::server('argv', null);
            if (is_array($args)) {
                $command = implode(' ', $args);
                if (Str::contains($command, $contain_options) && ($exclude_options == null || !Str::contains($command, $exclude_options))) {
                    return true;
                }
            }
            return false;
        }

        /**
         * Add seeds from the $seed_path after the current command in console finished.
         */
        protected function addSeedsAfterConsoleCommandFinished() {
            Event::listen(CommandFinished::class, function(CommandFinished $event) {
                // Accept command in console only,
                // exclude all commands from Artisan::call() method.
                if ($event->output instanceof ConsoleOutput) {
                    Artisan::call('db:seed', [ '--class' => "MayIFit\Core\Translation\Database\Seeds\DatabaseSeeder", '--force' => '' ]);
                }
            });
        }

    }
?>