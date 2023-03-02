# An Alpine.js toast package for laravel livewire.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ccsliinc/livewire-toast.svg?style=flat-square)](https://packagist.org/packages/ccsliinc/livewire-toast)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ccsliinc/livewire-toast/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ccsliinc/livewire-toast/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ccsliinc/livewire-toast/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ccsliinc/livewire-toast/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ccsliinc/livewire-toast.svg?style=flat-square)](https://packagist.org/packages/ccsliinc/livewire-toast)

This is a livewire toast package for laravel.

## Installation

You can install the package via composer:

```bash
composer require ccsliinc/livewire-toast
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="livewire-toast-config"
```

This is the contents of the published config file:

```php
return [
    /**
     *  Default delay in ms for automatic close;
     */
    'delay' => '5000',

    /**
     *  Position of toast.
     *
     * 'top-left'
     * 'top-center'
     * 'top-right'
     * 'middle-left'
     * 'middle-center'
     * 'middle-right'
     * 'bottom-left'
     * 'bottom-center'
     * 'bottom-right'
     */
    'position' => 'bottom-right',

    /**
     * Percentage
     */
    'opacity' => 85,
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="livewire-toast-views"
```

## Usage



```php
 1. Add @include('livewire-toast::notification') in your template.
 2. On any livewire component call:
 
    $this->notify('Message', 'Title', 'Second Title', 'type');
```
#### Arguments

1. Message - The message to display.
2. Title - The title of the toast.
3. *Secondary Title* - Small text after the title.
4. *Toast Type* - Options : success, info, error, warning


## Testing

```bash
composer test
```

## Roadmap

 - Create proper component transitions (in/out)
 - Support multiple css frameworks
 - Do Dusk testing

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [ccsliinc](https://github.com/ccsliinc)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
