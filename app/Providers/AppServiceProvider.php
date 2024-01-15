<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Article;
use App\Models\Registration;

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
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        Gate::define('kelolaArticle', function (User $user, Article $article) {
            return $user->id === $article->user_id;
        });

        Gate::define('admin', function (User $user) {
            return $user->role_id === 3;
        });

        Gate::define('admNCont', function (User $user) {
            return $user->role_id === 3 || $user->role_id === 2 && $user->contributor === 'true';
        });

        Gate::define('user', function (User $user) {
            return $user->role_id === 1;
        });
    }
}