<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            return base_path().'/public_html';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(125);

        Builder::macro('search', function($field, $string){
            return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
        });
        Builder::macro('orSearch', function($field, $string){
            return $string ? $this->orWhere($field, 'like', '%'.$string.'%') : $this;
        });
        Builder::macro('filter', function($field, $string){
            return $string ? $this->where($field, $string) : $this;
        });
    }
}
