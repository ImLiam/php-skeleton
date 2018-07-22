<?php

namespace ImLiam\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('skeleton.php'),
            ], 'config');

            if (! class_exists('CreateSkeletonTable')) {
                $this->publishes([
                    __DIR__.'/../database/migrations/create_skeleton_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_skeleton_table.php'),
                ], 'migrations');
            }

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/skeleton'),
            ], 'views');

            $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');

        // $this->app->singleton(SingletonClass::class, function () {
        //     $className = config('skeleton.class_name');
        //     return new SingletonClass(new $className);
        // });

        // $this->app->bind('command.skeleton:command-name', Command::class);
        // $this->commands([
        //     'command.skeleton:command-name',
        // ]);
    }
}
