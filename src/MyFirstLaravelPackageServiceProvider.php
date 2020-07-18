<?php

namespace Georanma\MyFirstLaravelPackage;

use Illuminate\Support\ServiceProvider;
use Georanma\MyFirstLaravelPackage\Commands\MyFirstLaravelPackageCommand;

class MyFirstLaravelPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/my-first-laravel-package.php' => config_path('my-first-laravel-package.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/my-first-laravel-package'),
            ], 'views');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_my_first_laravel_package_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_my_first_laravel_package_table.php'),
                ], 'migrations');
            }

            $this->commands([
                MyFirstLaravelPackageCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'my-first-laravel-package');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/my-first-laravel-package.php', 'my-first-laravel-package');
    }
}
