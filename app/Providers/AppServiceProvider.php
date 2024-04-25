<?php

namespace App\Providers;

use App\Repositories\PasswordResetRepository;
use App\Repositories\PasswordResetRepositoryInterface;
use App\Repositories\Products\ProductRepository;
use App\Repositories\Products\ProductRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepository;
use App\Repositories\ManageUsers\ManageUserRepositoryInterface;
use App\Repositories\ManageUsers\ManageUserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(PasswordResetRepositoryInterface::class, PasswordResetRepository::class);
        $this->app->bind(
            \App\Repositories\Categories\CategoryRepositoryInterface::class,
            \App\Repositories\Categories\CategoryRepository::class
        );
      $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
      $this->app->bind(ManageUserRepositoryInterface::class, ManageUserRepository::class);



    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
