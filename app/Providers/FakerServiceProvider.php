<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory;
use Faker\Generator;
use App\Faker\JpAddress;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function ($app) {
            $faker = Factory::create($app['config']->get('app.faker_locale', 'en_US'));
            $faker->addProvider(new JpAddress($faker));
            return $faker;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
