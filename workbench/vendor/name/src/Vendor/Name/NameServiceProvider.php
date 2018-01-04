<?php namespace Vendor\Name;

use Illuminate\Support\ServiceProvider;
use Vendor\Name\Console\Commands\NameCommand;

/**
 * The NameServiceProvider class
 *
 * @package Vendor\Name
 * @author  Dendi Sunandar <dendisunandar@gmail.com>
 */
class NameServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('name', function ($app) {
            return new Name;
        });

        $this->app->singleton('command.name', function ($app) {
            return new NameCommand;
        });

        $this->commands('command.name');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'name',
            'command.name',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/../../config/config.php';
        $appConfigPath     = config_path('name.php');

        $this->mergeConfigFrom($packageConfigPath, 'name');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/../../resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'name');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/name'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/../../resources/views';

        $this->loadViewsFrom($packageViewsPath, 'name');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/name'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/../../resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/name'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/../../database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
