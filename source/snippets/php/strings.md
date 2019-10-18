---
title: PHP - Strings
description: PHP Strings Dev Snippets
extends: _layouts.documentation
section: content
---

# Strings

---

### Create new string in PHP

```php
// Usage

$array = ""; // empty string
$array = "This is a string"; // string with double-quote
$array = 'This is also a string'; // string with single-quote
```

### String concatenation

In PHP, we can concatenate (join) strings using `dot (.)` sign.
```php
$firstname = 'John';
$lastname = 'Doe';

$fullname = $firstname . ' ' . $lastname;

// $fullname = 'John Doe'
```

String with double-quote sign are just as normal strings but they have hidden powers;
above can be accomplished avoiding dot sign by using double-quotes.


```php
$firstname = 'John';
$lastname = 'Doe';

$fullname = "$firstname $lastname";
// or
$fullname = "{$firstname} {$lastname}";

// $fullname = 'John Doe'
```
