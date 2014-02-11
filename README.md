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
        "lucasmichot/uuid62": "dev-master"
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

Create a unique Base62 ID from a string, an object or an array.

```php
$uuid = Uuid62::get('lucas@semalead.com');
echo $uuid;
// '6cSgR9eY7KkMkgA84Gw007'

$uuid = Uuid62::get(array('mail' => 'lucas@semalead.com'));
echo $uuid;
// '54TRNAo7kI4KqO2ooQC007'
```

## Todos

Create tests and edit README.md


## Tests

From the project directory, tests can be ran using `phpunit`

## License

Released under the MIT License - see `LICENSE.txt` for details.
