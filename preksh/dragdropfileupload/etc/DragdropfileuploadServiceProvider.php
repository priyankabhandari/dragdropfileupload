<?php

namespace Preksh\Dragdropfileupload\etc;

use Illuminate\Support\ServiceProvider;

class DragdropfileuploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'fileupload');
        $this->publishes([
            __DIR__ . '/../public' => base_path('public'),
        ],'dragdrop');
         $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/preksh/dragdropfileupload'),
        ],'dragdrop');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Preksh\Dragdropfileupload\controllers\DragdropController');
    }
}
