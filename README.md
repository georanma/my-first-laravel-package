# My first laravel package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/my-first-laravel-package.svg?style=flat-square)](https://packagist.org/packages/spatie/my-first-laravel-package)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/my-first-laravel-package/run-tests?label=tests)](https://github.com/spatie/my-first-laravel-package/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/my-first-laravel-package.svg?style=flat-square)](https://packagist.org/packages/spatie/my-first-laravel-package)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require spatie/package-my-first-laravel-package-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Georanma\MyFirstLaravelPackage\MyFirstLaravelPackageServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Georanma\MyFirstLaravelPackage\MyFirstLaravelPackageServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$my-first-laravel-package = new Georanma\MyFirstLaravelPackage();
echo $my-first-laravel-package->echoPhrase('Hello, Georanma!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [George Birnbaum](https://github.com/georanma)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
