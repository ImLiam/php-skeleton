# Package Title

[![Latest Version on Packagist](https://img.shields.io/packagist/v/imliam/:package_name.svg)](https://packagist.org/packages/imliam/:package_name)
[![Total Downloads](https://img.shields.io/packagist/dt/imliam/:package_name.svg)](https://packagist.org/packages/imliam/:package_name)
[![License](https://img.shields.io/github/license/imliam/:package_name.svg)](LICENSE.md)

**Note:** Replace `:author_name` `:author_username` `:author_email` `:package_name` `:package_description` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

**Note:** If this package does not have any Laravel support, additional lines should be removed from [composer.json](composer.json), [tests/TestCase.php](tests/TestCase.php), and the [src/SkeletonFacade.php](src/SkeletonFacade.php) and [src/SkeletonServiceProvider.php](src/SkeletonServiceProvider.php) files should be removed.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

<!-- TOC -->

- [Package Title](#package-title)
    - [Installation](#installation)
    - [Usage](#usage)
        - [`Skeleton@echoPhrase($needle, array $haystack, bool $strict = false): bool`](#skeletonechophraseneedle-array-haystack-bool-strict--false-bool)
    - [Testing](#testing)
    - [Changelog](#changelog)
    - [Contributing](#contributing)
        - [Security](#security)
    - [Credits](#credits)
    - [License](#license)

<!-- /TOC -->

## Installation

You can install the package with [Composer](https://getcomposer.org/) using the following command:

```bash
composer require imliam/:package_name:^1.0.0
```

## Usage

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

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email liam@liamhammett.com instead of using the issue tracker.

## Credits

- [Liam Hammett](https://github.com/imliam)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
