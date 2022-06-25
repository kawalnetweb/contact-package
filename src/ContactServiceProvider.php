<?php
namespace Netweb\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    function boot(){
        // load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // load views
        $this->loadViewsFrom(__DIR__.'/views', 'contact');

        // load migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');

        // Merge config
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );

        // $this->publishes([
        //     __DIR__.'/database/migrations/2022_06_25_055033_create_contacts_table.php' => database_path('/migrations/2022_06_25_055033_create_contacts_table.php')
        // ], 'contact-migration');

        // public config - It mean package config file move to root config folder
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php')
        ], 'contact-config');


    }

    function register(){

    }

}
?>
