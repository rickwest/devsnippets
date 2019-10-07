---
title: PHP - Arrays
description: PHP Arrays Dev Snippets
extends: _layouts.documentation
section: content
---

# Arrays

Create new array in PHP

```php
// Usage

$array = []; // recommended
$array = array();
$array = ['foo' => 'bar'];
```

### Destructure arrays in PHP

In Javascript, we loved the destructuring assignments in Arrays, in PHP we can achieve it via
```php
$array = [1, 2, 3]; 

// Using the list syntax:
list($a, $b, $c) = $array;

// Or the shorthand syntax:
[$a, $b, $c] = $array;

// $a = 1
// $b = 2
// $c = 3
```

### Skipping elements in an array in PHP
```php
$array = [1, 2, 3]; 

[, , $c] = $array;

// $c = 3
```

### Non-numerical keys in PHP

```php
$array = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

['c' => $c, 'a' => $a] = $array;

```