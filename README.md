# This is my package test-package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lichtand/test-package.svg?style=flat-square)](https://packagist.org/packages/lichtand/test-package)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/lichtand/test-package/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/lichtand/test-package/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/lichtand/test-package/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/lichtand/test-package/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lichtand/test-package.svg?style=flat-square)](https://packagist.org/packages/lichtand/test-package)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/test-package.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/test-package)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require lichtand/test-package
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="test-package-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="test-package-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="test-package-views"
```

## Usage

```php
$testPackage = new LichtAnd\TestPackage();
echo $testPackage->echoPhrase('Hello, LichtAnd!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Andreas Licht](https://github.com/LichtAnd)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
