---
title: PHP - Tooling
description: PHP Tooling Snippets
extends: _layouts.documentation
section: content
---

# PHP Tooling

## PHP Stan

https://github.com/phpstan/phpstan

### Install PHPStan with Composer

```bash
composer require --dev phpstan/phpstan
```

### Analyse

```bash
vendor/bin/phpstan analyse {directories to analyse}
```

### Config

Basic `phpstan.neon` config

```neon
parameters:
    level: 7
    paths:
        - src
        - tests
```

--- 

## PHP CS Fixer

https://cs.symfony.com/

### Install globally with composer

```bash
composer global require friendsofphp/php-cs-fixer
```

Then make sure you have the global Composer binaries directory in your PATH

```bash
export PATH="$PATH:$HOME/.composer/vendor/bin"
```

### Config

```php
<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')
    )
;
```
