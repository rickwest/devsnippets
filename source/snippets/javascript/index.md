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

#### filter() method

Array.filter() is a built in JavaScript function, pretty similar to map. Filter receives the same arguments as map, and works very similarly. The only difference is that the callback needs to return either true or false. If it returns true then the array keeps that element and if it returns false the element is filtered out. Map always return the same length of array Whether it's meet the condition or not where filter return only filtered values.

#### When to use the Filter Method
When you want only items that meet a required condition in an array.

##### Code
Lets filtered even numbers & returns new array.
```javascript
const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

const evenNumbers = numbers.filter(x => x % 2 === 0) // filter only even values
console.log(evenNumbers); // [2, 4, 6, 8]
```

#### reduce() method

Just like .map(), .reduce() also runs a callback for each element of an array. What’s different here is that reduce passes the result of this callback (the accumulator) from one array element to the other.
The accumulator can be pretty much anything (integer, string, object, etc.) and must be instantiated or passed when calling .reduce().
It can easily turn an array of arrays into a single one.

##### Code
for example, Say you have an array with these students and their respective score & We need to know the total score of all of them for an average. With .reduce(), it’s pretty straightforward:
```javascript
const students = [
  {
    id: 10,
    name: "Poe Dameron",
    score: 75,
  },
  {
    id: 2,
    name: "Temmin 'Snap' Wexley",
    score: 30,
  },
  {
    id: 4,
    name: "Tallissan Lintra",
    score: 50,
  },
  {
    id: 19,
    name: "Ello Asty",
    score: 10,
  }
];

const totalScore = students.reduce(function (accumulator, student) {
  return accumulator + student.score;
}, 0);

const totalScore = students.reduce((acc, student) => acc + student.score, 0); // or with ES6’s arrow functions
```
Notice that I’ve set the starting value as 0. I could have also used an existing variable if necessary. After running the callback for each element of the array, reduce will return the final value of our accumulator (in our case: 165).



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

#### Using replace() to strip off any html tag from a given html text.

replace(pattern|matchString, replaceString|function) where the first parameter "pattern" can be a regular expression, or a string and the second parameter can be a string that you want to replace with or a function that can be called for a matched pattern/string.

##### Code
```JavaScript

function stripHtmlTags(htmlText){
	if(htmlText && htmlText.length){
		return htmlText.replace(/<(?:.|\n)*?>/gi, ''); // g is for global replace, i for ignore case.
	}
	return htmlText;
}
const str = "<h1>replace() method in javascript is really powerful.</h1>";

console.log(stripHtmlTags(str)); // "replace() method in javascript is really powerful."

```
### List items from an array until a specific string is found. JS


let cards = ['Diamond', 'Spade', 'Heart', 'Club'];

let currentCard = 'Heart';

while (currentCard !== 'Spade') {
       	console.log(currentCard);
  			currentCard = cards[Math.floor(Math.random() * 4)];
       }
console.log('found a spade');
