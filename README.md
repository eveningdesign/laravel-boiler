# laravel-boiler
Generate Laravel 5.x boilerplate code for basic CRUD operations.

## Overview

Here are two things I hate doing:
* the same thing over and over, and
* using string literals all over the place.

This package generates code based off of the MySQL tables in your database. It creates the views/constants/controllers/etc that are associated with a resource and puts them in the standard locations.

You'll notice that there are very few (if any) string literals for view names, routes, controller actions, etc. That's because refactoring them is a pain. It's much easier to change the url path or route name in one place, and not  have to worry about missing spots in the code. Yes, you can search and replace, but you are required to inspect the results to make sure you don't change something you didn't intend to change (or miss a typo).

## Installation

Install in the usual composer way.

```
{
    "require-dev": [
        "eveningdesign\laravel-boiler": "~0.0";    
    ]
}
```

Run composer update.

This package uses Laravel 5.5 auto-discover. If you're using 5.5, you don't have to do anything else and you'll have access to the Artisan commands.

For Laravel < 5.5, add the service provider. You only need it in dev mode, so you have two options. Option one is to do an environment check in app.php, and if you're local array_merge the provider into the providers array. Peform this setup at the top of the file before the return statement. Option two is to do the check and register the BoilerplateServiceProvider in the AppServiceProvider.

```
<?php
$providers = [...],
if(env('APP_ENV') == 'local') {
    $providers = array_merge($providers, [EveningDesign\Boiler\BoilerplateServiceProvider::class]);
}

return [
    ...
    'providers' => $providers,
    ...
];
```

## Usage

The package provides Artisan commands. If you have an addresses table in your database, you can use the Model name to generate views and constants.

```
php artisan boiler:constants Address
php artisan boiler:views Address
```
The views command will connect to your MySQL database (have not tested it on any other database), pull the field names and data types, and generate the views with the correct accessors in place.

## Config

There are some config options for replacements in the views. Add a `boiler.php` file in your config directory and include the ones you want overridden (it's merged with the defaults). Look in the package config directory to see the options that are available.
## WARNING
This doesn't ask for many options yet. It just overwrites files in the locations it expects them to go. If you have a `create.blade.php` view in the address directory, running the views command will overwrite your create.blade.php file. Use with caution.