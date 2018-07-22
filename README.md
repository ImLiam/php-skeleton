# Package Title

[![Latest Version on Packagist](https://img.shields.io/packagist/v/imliam/:package_name.svg)](https://packagist.org/packages/imliam/:package_name)
[![Build Status](https://img.shields.io/travis/imliam/:package_name.svg)](https://travis-ci.org/imliam/:package_name)
![Code Quality](https://img.shields.io/scrutinizer/g/imliam/:package_name.svg)
![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/imliam/:package_name.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/imliam/:package_name.svg)](https://packagist.org/packages/imliam/:package_name)
[![License](https://img.shields.io/github/license/imliam/:package_name.svg)](LICENSE.md)

**NOTE: READ THE [REPOSITORY SETUP FILE](REPOSITORY_SETUP.md) FOR INSTRUCTIONS ON USING THIS SKELETON PACKAGE.**

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

<!-- TOC -->

- [Package Title](#package-title)
    - [💾 Installation](#💾-installation)
    - [📝 Usage](#📝-usage)
        - [`Skeleton@echoPhrase($needle, array $haystack, bool $strict = false): bool`](#skeletonechophraseneedle-array-haystack-bool-strict--false-bool)
    - [✅ Testing](#✅-testing)
    - [🔖 Changelog](#🔖-changelog)
    - [⬆️ Upgrading](#⬆️-upgrading)
    - [🎉 Contributing](#🎉-contributing)
        - [🔒 Security](#🔒-security)
    - [👷 Credits](#👷-credits)
    - [♻️ License](#♻️-license)

<!-- /TOC -->

## 💾 Installation

You can install the package with [Composer](https://getcomposer.org/) using the following command:

```bash
composer require imliam/:package_name:^1.0.0
```

The package also has [its own configuration file](config/config.php) that can be published to the application's config directory with the following command:

```bash
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="config"
```

To publish the package's database migrations, run:

```bash
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"
```

## 📝 Usage

``` php
$skeleton = new ImLiam\Skeleton();
echo $skeleton->echoPhrase('Hello world!');
```

### `Skeleton@echoPhrase($needle, array $haystack, bool $strict = false): bool`

Checks if a value exists in an array in a case-insensitive manner.

```php
(new ImLiam\Skeleton)->echoPhrase('Hello world!');
// Hello world!
```

## ✅ Testing

``` bash
composer test
```

## 🔖 Changelog

Please see [the changelog file](CHANGELOG.md) for more information on what has changed recently.

## ⬆️ Upgrading

Please see the [upgrading file](UPGRADING.md) for details on upgrading from previous versions.

## 🎉 Contributing

Please see the [contributing file](CONTRIBUTING.md) and [code of conduct](CODE_OF_CONDUCT.md) for details on contributing to the project.

### 🔒 Security

If you discover any security related issues, please email liam@liamhammett.com instead of using the issue tracker.

## 👷 Credits

- [Liam Hammett](https://github.com/imliam)
- [All Contributors](../../contributors)

## ♻️ License

The MIT License (MIT). Please see the [license file](LICENSE.md) for more information.
