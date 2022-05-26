<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Item;
use App\Models\Info;

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
        view()->composer('layout', function ($view) {
    $view->with('ownInfo', Info::first())->with('items', Item::where([
    ['status', '=', 1],
    ['is_menu', '=', 1],
])->get());
        });
           view()->composer('common.language_switcher', function ($view) {
        $view->with('current_locale', app()->getLocale());
        $view->with('available_locales', config('app.available_locales'));
    });

            
           Paginator::useBootstrapFive();
    }
}
