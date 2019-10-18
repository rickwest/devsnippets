---
title: PHP - DateTime
description: PHP DateTime Dev Snippets
extends: _layouts.documentation
section: content
---

# DateTime

---

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

# Create a Date From a String

### Here, we will be using PHP's strtotime()

The PHP strtotime() function is used to convert a human readable string to a Unix time.

```php
strtotime(time,now)
```

The following example will give you a better idea of this function

```php
<?php
	$t = strtotime("11:45am October 16 2019");
	echo "Created date is ".date("Y-m-d h:i:sa",$t);
?>
```

Using this function, you can parse about any English textual datetime description into a Unix timestamp. Here are some examples

```php
<?php
	$t=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $t) . "<br>";

	$t=strtotime("next Thursday");
	echo date("Y-m-d h:i:sa", $t) . "<br>";

	$t=strtotime("+2 Months");
	echo date("Y-m-d h:i:sa", $t) . "<br>";
?>
```
