<?php

namespace App\Providers;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
// use Masbug\Flysystem\GoogleDriveAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            Storage::extend('google', function ($app, $config) {
                $client = new \Google\Client();
                $client->setClientId($config['clientId']);
                $client->setClientSecret($config['configSecret']);
                $client->refreshToken($config['refreshToken']);

                $service = new \Google\Service\Drive($client);

                // $adapter = new \Masbug\Flysystem\GoogleDriveAdapter($service ,$config['folderId']);
                $adapter = new \Masbug\Flysystem\GoogleDriveAdapter($service, '/');
                $driver = new Filesystem($adapter);

                return new FilesystemAdapter($driver, $adapter, $config);
            });
        } catch (\Exception $e) {
            // لتجنب توقف الموقع في حال وجود خطأ بالإعدادات
        }
    }
}
