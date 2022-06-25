# Contact Form laravel Package

## This will send email to admin & save data into database

1. Step 1s
```
 composer require netweb/contact
```
2. Step 2 - If you want to register it yourself, add the ServiceProvider in config/app.php:
```
    'providers' => [
        /*
        * Package Service Providers...
        */
        Netweb\Contact\ContactServiceProvider::class,
    ]
```
2. Step 3 - To publish the config, run the vendor publish command:
```
 php artisan vendor:publish --tag="contact-config"

```
3. Step 4 - command
```
php artisan serve

```
4. Step 5 - Try project url
```
    http://127.0.0.1:8000/contact
```



