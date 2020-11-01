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
$array = array(); //array() function
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

### Length of an array
```php
$array = ["Car", "Bike", "Train"];

count($array); //count() function

```

### Sort an array in Ascending Order
```php
$array = ["Train", "Car", "Bike"];

sort($array); //sort() function

```

### Sort an array in Descending Order
```php
$array = ["Car", "Bike", "Train"];

rsort($array); //rsort() function
```

### Multi-dimensional arrays
```php
$students = array(
	//Student Name, Age and Behaviour
	array('Jack', 14, 'Good'),
	array('Mary', 13, 'Good'),
);
//print_r($students)
```

### Multi-dimensional associative arrays
```php
$marks = array(
	//Name of student is key
	"Jack" => array(
		//key-value pairs
		"Maths" => 95,
		"Science" => 84,
		"History" => 48,
	),

	"Mary" => array(
		"Maths" => 78,
		"Science" => 76,
		"History" => 64,
	),
);
//print_r($marks)
```


### Merge Arrays
```php
$colorsOne = ['Green', 'Black', 'Blue'];
$colorsTwo = ['Red', 'Yellow', 'Purple'];
$allColors = array_merge( $colorsOne, $colorsTwo);

//print_r($allColors)
```

### Get Array Keys
```php
$cars = [
    'name' => 'Gol',
    'maker' => 'Volkswagen'
];

$keys = array_keys( $cars );
//print_r($keys)
```

### Get Array Values
```php
$cars = [
    'name' => 'Gol',
    'maker' => 'Volkswagen'
];

$values = array_values( $cars );
//print_r($values)
```

### Checks if array has a value
```php
$carsOnGarage = ['Ferrari', 'Camaro', 'Mustang', 'Dodge Dart', 'Ford Torino Cobra'];
$newCar = 'Toyota Prius';

if( in_array( $newCar, $carsOnGarage )){
    echo "$newCar is on Garage";
}else{
    echo "$newCar is not on Garage";
}
//result= Toyota Prius is not on Garage
```


### Filter an array
```php
$numbers = [1,2,3,4,5,6,7,8,9,10];

$oddNumbers = array_filter( $numbers, function( $arrayElement){
    return $arrayElement % 2 === 0;
});

print_r( $oddNumbers )
/* Array
(
    [1] => 2
    [3] => 4
    [5] => 6
    [7] => 8
    [9] => 10
) */
```

### Map a multidimensional array into an associative array
```php
$multi = [['key' => 'height', 'value' => '1080'],['key' => 'width', 'value' => '1920']];

$assoc = array_columns($multi, 'value', 'key');

/*Array
(
	'height' => '1080'
	'width' => '1920'
)*/
```

### Get an array from a JSON string
```php
$jsonString = '{
	"apple": "red",
	"orange": "orange",
	"banana": "yellow"
}';

$array = json_decode( $jsonString, true );

print_r( $array );
/*
Array
(
    [apple] => red
    [orange] => orange
    [banana] => yellow
)
*/
```
