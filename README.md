# Uuid62

A simple library

[![Latest Stable Version](https://poser.pugx.org/lucasmichot/Uuid62/v/stable.png)](https://packagist.org/packages/lucasmichot/Uuid62)
[![Total Downloads](https://poser.pugx.org/lucasmichot/Uuid62/downloads.png)](https://packagist.org/packages/lucasmichot/Uuid62)
[![Build Status](https://travis-ci.org/lucasmichot/Uuid62.png)](https://travis-ci.org/lucasmichot/Uuid62)

* [Requiring/Loading](#requiringloading)
* [Methods](#methods)
 * [get()](#get)
* [Tests](#tests)
* [License](#license)

## Requiring / Loading

If you're using Composer to manage dependencies, you can include the following
in your `composer.json` file:

    "require": {
        "Uuid62/Uuid62": "dev-master"
    }

Then, after running `composer update` or `php composer.phar update`, you can
load the class using Composer's autoloading:

```php
require 'vendor/autoload.php';
```

Otherwise, you can simply require the file directly:

```php
require_once 'path/to/Uuid62/src/Uuid62/Uuid62.php';
```

## Methods

#### get()

Determines if the provided email is unique (dotted or aliased).

```php
$uuid = Uuid62::get('lucas@semalead.com');
echo $uuid;
// 'YIbZFzz9EOi6Oc07'

// You can also pad the string with 0 on its left.
$paddedUuid = Uuid62::get('lucas@semalead.com', true);
echo $Uuid62->isUnique();
// '0YIbZFzz9EOi6Oc07'
```

## Todos

Create tests and edit README.md


## Tests

From the project directory, tests can be ran using `phpunit`

## License

Released under the MIT License - see `LICENSE.txt` for details.
