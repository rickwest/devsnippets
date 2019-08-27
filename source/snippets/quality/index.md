---
title: PHP Quality
description: PHP Quality Snippets
extends: _layouts.documentation
section: content
---

# PHP Stan

### Install PHPStan with Composer

```bash
composer require --dev phpstan/phpstan
```

## Analyse

```bash
vendor/bin/phpstan analyse {directories to analyse}
```

## Config

```neon
parameters:
    level: 7
    paths:
        - src
        - tests
```

# PHP CS Fixer tool
https://cs.symfony.com/

Install globally with composer

composer global require friendsofphp/php-cs-fixer

Then make sure you have the global Composer binaries directory in your PATH
export PATH="$PATH:$HOME/.composer/vendor/bin"
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
