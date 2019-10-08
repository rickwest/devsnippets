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

### Promise

#### Using Promise.race() method

When we pass multiple promises to the Promise.race method, it resolves/rejects the first promise that resolves/rejects. 
To the setTimeout method, we pass a timer: 500ms for the first promise (firstPromise), and 100ms for the second promise (secondPromise). 
This means that the secondPromise resolves first with the value of 'two'. res now holds the value of 'two', which gets logged.

#### Code Sample

```
const firstPromise = new Promise((res, rej) => {
  setTimeout(res, 500, "one");
});

const secondPromise = new Promise((res, rej) => {
  setTimeout(res, 100, "two");
});

Promise.race([firstPromise, secondPromise]).then(res => console.log(res));
```