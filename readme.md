<p align="center">
<a href="https://travis-ci.org/huliuqing/php-comparison/"><img src="https://travis-ci.org/huliuqing/php-comparison.svg?branch=master" alt="Build Status"></a>
</p>

## About PHP-COMPARISON

The most awesome comparison engine created for php.

## Features

- Provide uniform empty method.
- Provide uniform isset method.
- Provide uniform is null method.
- Provide the functionality to compare PHP values for great than, less than, great than or equal and less than or equal check.
- Much more.

## Requires

- PHP version 7.1+.
- sebastian/comparator component.
- florianwolters/component-core-comparable component.

## Installation

You can add this library as a local, per-project dependency to your project using Composer:

```shell
composer require phpzendo/php-comparison
```

If you only need this library during development, for instance to run your project's test suite, then you should add it as a development-time dependency:

```shell
composer require --dev phpzendo/php-comparison
```

## Usage

### Verify the given value is empty.

```php
<?php

use PhpZendo\Comparison\Compare;

$comparator = Compare::getInstance();
$comparator->empty(null);
```

### Verify the given value is null.

```php
<?php

use PhpZendo\Comparison\Compare;

$comparator = Compare::getInstance();
$comparator->isNull(null);
```

### Verify the given value is set.

```php
<?php

use PhpZendo\Comparison\Compare;

$comparator = Compare::getInstance();
$comparator->isset(null);
```

## Compare two values.

```php
<?php

use PhpZendo\Comparison\Compare;

$comparator = Compare::getInstance();

$comparator->gt($expected = 2, $actual = 1);// Check $expected great than $actual.
$comparator->gte($expected = 1, $actual = 1);// Check $expected great than or equal $actual.
$comparator->lt($expected = 1, $actual = 2);// Check $expected less than $actual.
$comparator->lte($expected = 2, $actual = 2);// Check $expected less than or equal $actual.
```

## Change Log

### 2018-06-04 17：05

Established!

### 2018-06-09 22:36

Add compare helper functions.
