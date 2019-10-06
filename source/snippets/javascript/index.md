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
