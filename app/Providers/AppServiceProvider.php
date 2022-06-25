<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        \View::composer(['partials/footer', 'profile/partials/footer'], function ($view) {
            $json = Storage::disk('local')->get('footer.json');
            $data = json_decode($json);
            $view->with(['data'=>$data]);

    });
    }
}