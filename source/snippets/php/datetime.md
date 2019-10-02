---
title: PHP - DateTime
description: PHP DateTime Dev Snippets
extends: _layouts.documentation
section: content
---

# DateTime

Get current date time:

```php
// DateTime($time='now', DateTimeZone $timezone=null)

// Usage
$now = new DateTime();
```

### sub
Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object

```php
$date = new DateTime('2000-01-20');
$date->sub(new DateInterval('P10D'));
echo $date->format('Y-m-d');
```

### add
Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object

```php
$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d');
```

# DateInterval

The format starts with the letter P, for period. Each duration period is represented by an integer value followed by a period designator. If the duration contains time elements, that portion of the specification is preceded by the letter T.

Examples:

| Period Designator | Description                                                           |
| ----------------- |---------------------------------------------------------------------- |
| Y	                | years                                                                 |
| M	                | months                                                                |
| D	                | days                                                                  |
| W	                | weeks. These get converted into days, so can not be combined with D.  |
| H	                | hours                                                                 |
| M	                | minutes                                                               |
| S	                | seconds                                                               |

Here are some simple examples. Two days is P2D. Two seconds is PT2S. Six years and five minutes is P6YT5M.



