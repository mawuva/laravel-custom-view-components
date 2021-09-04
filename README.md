# A bunch of Custom View Components

This package provide commons view components you usually use in your laravel project.

## Installation

You can install the package via composer:

```bash
composer require mawuekom/laravel-custom-view-components
```

## Usage

Once install, go to `config/app.php` to add `CustomponentsServiceProvider` in providers array

 Laravel 5.5 and up Uses package auto discovery feature, no need to edit the `config/app.php` file.

 - #### Service Provider

```php
'providers' => [

    ...

    Mawuekom\Customponents\CustomponentsServiceProvider::class,

],
```

- #### Publish Assets

```bash
php artisan vendor:publish --tag=customponents
```

Or you can publish config

```bash
php artisan vendor:publish --tag=customponents --config
```

#### Configuration

* There are many configurable options which have been extended to be able to configured via `.env` file variables.
* See config file: [customponents.php](https://github.com/mawuva/laravel-custom-view-components/blob/main/config/customponents.php).

```php
<?php

return [

    /**
     * App Name should be set here
     */

    'app_name' => env('APP_NAME', 'My Laravel Project')
];
```

Once all this is done, you can go in your `welcome.blade.php` and add the code below...

```php
<x-customponents::partials.headers title="Page Title" description="Page Description" section="" />

<div>
    <h1>My Laravel Website</h1>
    <hr>
    <p>
        Some content here
    </p>
</div>

<x-customponents::partials.footers />
```

 * The `section` parameter is here to help you when you want to define different views or section for a guest or logged user.

#### If you want you add some assets like style sheets and scripts links in your webpage, don't be worry.
**It's very simple.**

This package is provided with a view component helper called `Section` which can help you include section of your project in another section. 

Take a look at [headers.blade.php](https://github.com/mawuva/laravel-custom-view-components/blob/main/resources/views/components/partials/headers.blade.php) component source code.

```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <x-customponents::partials.seo-tags title="{{ $title }}" description="{{ $description }}" section="{{ $section }}" />
        @yield('styles')
    </head>
    <body @yield('body_attributes')>
```

You will see a classic blade directive : `@yield('styles')`

You can then use this like that...

```php
<x-customponents-section name="styles">
    your content goes here
</x-customponents-section>
```

So to include assets links in your webpage, just do it like that

```php
<x-customponents::partials.headers title="Page Title" description="Page Description" section="" />
    <x-customponents-section name="styles">
        <link rel="stylesheet" href="css/app.css">
    </x-customponents-section>
</x-customponents::partials.headers>

<div>
    <h1>My Laravel Website</h1>
    <hr>
    <p>
        Some content here
    </p>
</div>

<x-customponents::partials.footers>
    <x-customponents-section name="scripts">
        <script src="js/app.js"></script>
    </x-customponents-section>
</x-customponents::partials.footers>
```

It is nice, isn't it !!! 🙂😉

* On top of that, you also a components [assets.blade.php](https://github.com/mawuva/laravel-custom-view-components/blob/main/resources/views/components/resources/assets.blade.php) which you can use to add assets links in your page just like that : 

```php
<x-customponents::resources.assets type="css" path="css/app.css" />
```

Then, your page could look like that...

```php
<x-customponents::partials.headers title="Page Title" description="Page Description" section="" />
    <x-customponents-section name="styles">
        <x-customponents::resources.assets type="css" path="css/app.css" />
    </x-customponents-section>
</x-customponents::partials.headers>

<div>
    <h1>My Laravel Website</h1>
    <hr>
    <p>
        Some content here
    </p>
</div>

<x-customponents::partials.footers>
    <x-customponents-section name="scripts">
        <x-customponents::resources.assets type="js" path="js/app.js" />
    </x-customponents-section>
</x-customponents::partials.footers>
```

### Enjoy 🙂😉👌🔥

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
