# php-segfault-exception

[![Build Status](https://travis-ci.org/alexeevdv/php-segfault-exception.svg?branch=master)](https://travis-ci.org/alexeevdv/php-segfault-exception) 
[![codecov](https://codecov.io/gh/alexeevdv/php-segfault-exception/branch/master/graph/badge.svg)](https://codecov.io/gh/alexeevdv/php-segfault-exception)
![PHP 5.6](https://img.shields.io/badge/PHP-5.6-green.svg) 
![PHP 7.0](https://img.shields.io/badge/PHP-7.0-green.svg) 
![PHP 7.1](https://img.shields.io/badge/PHP-7.1-green.svg) 
![PHP 7.2](https://img.shields.io/badge/PHP-7.2-green.svg)
![PHP 7.3](https://img.shields.io/badge/PHP-7.3-green.svg)
![PHP 7.3](https://img.shields.io/badge/PHP-7.4-green.svg)


PHP exception which leads to segfault when not handled properly.

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require alexeevdv/php-segfault-exception "^1.0"
```

or add

```
"alexeevdv/php-segfault-exception": "^1.0"
```

to the ```require``` section of your `composer.json` file.


## Usage

```php
<?php
// test.php

use alexeevdv\SegfaultException;

throw new SegfaultException;

```

```bash
$ php test.php 
Segmentation fault (core dumped)
```

