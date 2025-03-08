<?php

namespace App\Providers;

use App\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'Potato',
                    'category' => 'Vegi'
                ],
                [
                    'id' => 2,
                    'name' => 'Loaf',
                    'category' => 'Bread'
                ]
             ];

             return new ProductService($products);
            });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       view()->share('productKey', 'abc123');
    }
}
