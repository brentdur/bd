<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Article;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('nav', function($view){
            $view->with('latest', Article::latest()->first());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function composeNavigation()
    {
        view()->composer('nav', 'App\Http\Composers\NavigationComposers');
    }
}
