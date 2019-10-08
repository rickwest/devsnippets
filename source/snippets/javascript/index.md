---
title: Javascript
extends: _layouts.documentation
description: Javascript Dev Snippets
section: content
---

# Javascript

## Search from Array of Objects

### Array

#### Using the find() Method

The Array.find() is the inbuilt function in JavaScript which is used to get a value of the first item in the array that meets the provided condition.
It checks all the items of the array and whichever the first item meets the condition is going to print.
If more than one item meets the condition, then the first item satisfying the condition is returned.
Suppose that you want to find the first odd number in the array.
The argument function checks whether an argument passed to it is an odd number or not.
The find() function calls an argument function for every item of the array.
The first odd number for which argument function returns true is reported by the find() function as the answer.
The syntax of array find() method is following.

#### Arguments
The function takes three arguments:
element:
This is the current item being processed by the function.
index
This is the index of the current item being processed by the function.
array:
This is the array on which the array.filter() function was called.

Another argument which is thisValue. It used to tell the function to use the array value when executing an argument function.

#### Code
```javascript
const todoList = [
  {
	task: 'Create new array function',
	isActive: false,
  },
  {
	task: 'Change number type strings to type number',
	isActive: false,
  },
  {
	task: 'Record new array using map',
	isActive: true,
  }
];

const findTask = (arrayTodo, value) => {
	const position =arrayTodo.find((objectTodo) => {
		return objectTodo.job.toLowerCase() === value.toLowerCase();
	})
	return position;
};

console.log(findTask(todoList,'record new array using map'))

```

#### map() method

Array.map() is a built in JavaScript function and normally a developers first introduction to 'declarative' programming in JavaScript.
It runs a callback function on each element in the array, passing the element and index values to the callback, and returns a new array with all the values returned by the callback function.

##### Code
Lets write a function that takes an array of values, and returns a new array, wherein all the values from the original array have doubled.
```javascript
const original = [1, 2, 3, 4];

const double = original.map(val => val * 2);
console.log(double); // [2, 4, 6, 8]
```

#### split() method

This method is used to split a string into an array of substrings. It takes two optional parameters, the *separator* and the *limit*. If the *separator* parameter is not given, the method will return the entire string. A *separator* parameter of an empty string ("") will split the string between each character.

##### Code
Here are some examples of a string being split using different separators. The first example also uses the limit parameter.
```javascript
const str = "A very interesting string!";

const arr = str.split(" ", 3);
console.log(arr); //["A", "very", "interesting"]

const arr2 = string.split("r");
console.log(arr2); //["A ve", "y inte", "esting st", "ing!"]
```

#### reverse() method

The reverse() method will reverse the order of an array. It changes the original array, it does not return a new array.

##### Code
```javascript
const arr = ["goldfish", "cats", "dogs"];

arr.reverse();

console.log(arr); //["dogs", "cats", "goldfish"]
```

#### join() method

The join() method will join all the elements of an array into a string. It has an optional *separator* parameter. If no parameter is given, the elements are separated with a comma.

##### Code

```javascript
const arr = ["Lions", "tigers", "bears."];

const str = arr.join(" and ");

console.log(str); //"Lions and tigers and bears."

```

#### Using split(), reverse() and join() to reverse the letters of a string.

##### Code

```javascript
const str = "abcde";

const rev = str.split("").reverse().join("");

console.log(rev); //"edcba"
```

#### Using map(), split(), reverse() and join() to reverse the letters of each word in a string.

##### Code
```JavaScript
const str = "All work and no play makes Jack a dull boy"

// First the string is split into an array:
const arr = str.split(" ");

// Then the letters of each word/element in the array are reversed
const arr2 = arr.map((x) => x.split("").reverse().join(""));

console.log(arr2); // ["llA", "krow", "dna", "on", "yalp", "sekam", "kcaJ", "a", "llud", "yob"]

// Then join each element together again, making sure to use a separator.

const newStr = arr2.join(" ");

console.log(newStr); // "llA krow dna on yalp sekam kcaJ a llud yob"

// Then go watch The Shining.
```
