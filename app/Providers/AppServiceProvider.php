<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('layouts.app', function ($view) {
            $categoriesByParent = [
                'Запчасти' => Category::where('parent', 'Запчасти')->get(),
                'Расходники' => Category::where('parent', 'Расходники')->get(),
                'Оборудование' => Category::where('parent', 'Оборудование')->get(),
            ];

            $view->with('categoriesByParent', $categoriesByParent);
        });
    }
}
