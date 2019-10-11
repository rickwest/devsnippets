---
title: Javascript
extends: _layouts.documentation
description: Javascript Dev Snippets
section: content
---

# Javascript

## Variables

### Scopes

#### var

The JavaScript variables statement is used to declare a variable and, optionally, we can initialize the value of that variable.
Variable declarations are processed before the execution of the code.
The scope of a JavaScript variable declared with var is its current execution context.
The scope of a JavaScript variable declared outside the function is global.

##### Code

```JavaScript

function nodeSimplified(){
  var a =5;
  console.log(a);  // output 5
  if(true){
   var a=10;
   console.log(a); // output 10
  }
  console.log(a);  // output 10
}
```

### let

The let statement declares a local variable in a block scope. It is similar to var, in that we can optionally initialize the variable.
The let statement allows you to create a variable with the scope limited to the block on which it is used.
It is similar to the variable we declare in other languages

##### Code

```JavaScript
function nodeSimplified(){
  let a =5;
  console.log(a);  // output 5
  if(true){
   let a=20;
   console.log(a); // output 20
  }
  console.log(a);  // output 5
}

```

### const

const statement values can be assigned once and they cannot be reassigned. The scope of const statement works similar to let statements.

##### Code

```JavaScript

function test(){
  const MY_VARIABLE =5;
  console.log(MY_VARIABLE);  //output 5
  MY_VARIABLE =20;           //throws type error
  console.log(MY_VARIABLE);
}
```

---

## Arrays

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
    task: "Create new array function",
    isActive: false
  },
  {
    task: "Change number type strings to type number",
    isActive: false
  },
  {
    task: "Record new array using map",
    isActive: true
  }
];

const findTask = (arrayTodo, value) => {
  const position = arrayTodo.find(objectTodo => {
    return objectTodo.job.toLowerCase() === value.toLowerCase();
  });
  return position;
};

console.log(findTask(todoList, "record new array using map"));
```

### Objects

You can use objects to store functions, other objects and properties, so you can create more descriptive code. Objects are easy and widely used in javascript.

### Code

```javascript
const car = {
  name: "Ferrari",
  year: 2015,
  horsepower: 670,
  isCar: true
};
console.log(
  `The ${car.name} of ${car.year} has a hoserpower of ${car.horsepower} and is really a car ? ${car.isCar}`
);

//Another example with functions

const calc = {
  sum: function(a, b) {
    return a + b;
  },
  subtraction: function(a, b) {
    return a - b;
  }
};

console.log(
  `The sum of 5 plus 4 is ${calc.sum(
    5,
    4
  )} and the subtraction is ${calc.subtraction(5, 4)}`
);

//Anote example with other object

const computer = {
  monitor: "Acer",
  cpu: {
    name: "FX-6300",
    core: 6,
    socket: "AM3 +"
  },
  gpu: {
    name: "GTX-950",
    Memory: 2
  },
  ram: {
    name: "Hyperx",
    gb: 8
  }
};

console.log(
  `My computer has a monitor ${computer.monitor}, a cpu ${computer.cpu.name} with ${computer.cpu.core} cores, GPU ${computer.gpu.name} and ${computer.ram.gb} of ram.`
);
```

### Template String

Normally, we write our string to attribute a variables or to logs this way “your content” but with template string we use “ and like this we can input our variable as \${variable name} in a fastest and easiest way than ‘string+variable+string again’ you can put everything like objects and functions.

### Code

```javascript
const name = "Cristian";
const age = 20;

function myCountry() {
  return "Brazil";
}

console.log(
  "My name is " +
    name +
    " and i am " +
    age +
    " years old and i live in " +
    myCountry() +
    "."
);

//this same example whit template string

console.log(
  `My name is ${name} and i am ${age} years old and i live in ${myCountry()}.`
);
```

### Objects

You can use objects to store functions, other objects and properties, so you can create more descriptive code. Objects are easy and widely used in javascript.

### Code

```javascript
const car = {
  name: "Ferrari",
  year: 2015,
  horsepower: 670,
  isCar: true
};
console.log(
  `The ${car.name} of ${car.year} has a hoserpower of ${car.horsepower} and is really a car ? ${car.isCar}`
);

//Another example with functions

const calc = {
  sum: function(a, b) {
    return a + b;
  },
  subtraction: function(a, b) {
    return a - b;
  }
};

console.log(
  `The sum of 5 plus 4 is ${calc.sum(
    5,
    4
  )} and the subtraction is ${calc.subtraction(5, 4)}`
);

//Anote example with other object

const computer = {
  monitor: "Acer",
  cpu: {
    name: "The best processor ever",
    core: 6
  },
  gpu: {
    name: "The best GPU ever",
    Memory: 2
  },
  ram: {
    gb: 8
  }
};

console.log(
  `My computer has a monitor ${computer.monitor}, a cpu ${computer.cpu.name} with ${computer.cpu.core} cores, GPU ${computer.gpu.name} and ${computer.ram.gb} of ram.`
);
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

const evenNumbers = numbers.filter(x => x % 2 === 0); // filter only even values
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
    score: 75
  },
  {
    id: 2,
    name: "Temmin 'Snap' Wexley",
    score: 30
  },
  {
    id: 4,
    name: "Tallissan Lintra",
    score: 50
  },
  {
    id: 19,
    name: "Ello Asty",
    score: 10
  }
];

const totalScore = students.reduce(function(accumulator, student) {
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

This method is used to split a string into an array of substrings. It takes two optional parameters, the _separator_ and the _limit_. If the _separator_ parameter is not given, the method will return the entire string. A _separator_ parameter of an empty string ("") will split the string between each character.

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

The join() method will join all the elements of an array into a string. It has an optional _separator_ parameter. If no parameter is given, the elements are separated with a comma.

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

const rev = str
  .split("")
  .reverse()
  .join("");

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

```
let cards = ['Diamond', 'Spade', 'Heart', 'Club'];

let currentCard = 'Heart';

while (currentCard !== 'Spade') {
       	console.log(currentCard);
  			currentCard = cards[Math.floor(Math.random() * 4)];
       }
console.log('found a spade');
```

### Finding all vowels in a string using match()

To find all vowels in a string, use the following:

```javascript
let input = "A fox runs fast. Oh, how fast it runs!";

let vowels = input.match(/[aeiouAEIOU]/g);
```

In this example, `vowels` is an array containing all of the vowels:

```javascript
console.log(vowels);
=> [ 'A', 'o', 'u', 'a', 'O', 'o', 'a', 'i', 'u' ]
```

### Add/Sub time period to/from a Date variable

to add a period (for example 10 minutes) to Date variable in javascript.

```javascript
function addSecond(date, seconds) {
  // Time period is in milliseconds so you must multiply second with 1000
  return new Date(date.getTime() + seconds * 1000);
}

// add 60 seconds to current time
expired = addSecond(new Date(), 60);
```

### Whitelist Checker

Checks provided keys in reqInput are in whiteList or not

```javascript
/**
* @param  		{*} 		        reqInput  {data input to check white list on}
* @param  		{*} 		        whiteList {the list of properties to become checked in reqInput}
*/
whiteChecker(reqInput, whiteList) {
  let keys = Object.keys(reqInput);
  for (let key of keys) {
    if (!whiteList.includes(key)) {
      return false;
    }
  }
 return true;
}
```

### Random Generator

Returns a random number between provided min and max numbers

```javascript
/**
* @param  		{!number} 		  min       {Minimum number to be GTE in output number}
* @param  		{!number} 		  max       {Maximum number to be LTE in output number}
*/
generateRandomNumber(min, max) => {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
```

### Closures concept

#### Why we use closures?

The concept of closure is used to restrict the analogy of functional scope to initialized the variable in functional scope and restrict the local variable to be excess from global. When a function created and passed around or returned from another function it carries a variables with it. Due to which, inner variable will come with all the necessary attachments. Hope this will give you a core concept of JavaScript closure.

#### How we use closures?

A closure is an inner function that has access to the outer (enclosing) function’s variables — scope chain. The closure has three scope chains: it has access to its own scope (variables defined between its curly brackets), it has access to the outer function’s variables, and it has access to the global variables

Lets move on the examples

##### Code

Example - 1

```javascript
function init() {
  var name = "hello world"; // parent scope
  function displayName() {
    console.log(name); // child scope
  }
  displayName();
}
init(); // hello world

// name — is a local variable created by init function
// displayName() — is the nested function.
```

#### Explanation

init() creates a local variable called name and a function calling displayName(). The displayName() function is an nested function and is only available within the body of the init() function. The displayName() function has no local variables of its own. However, because nested function have access to the variables of outer function, displayName() can access the variable name declared in the parent function.

Example-2

```javascript
function createCounter() {
  let counter = 0;
  const myFunction = function() {
    counter = counter + 1;
    return counter;
  };
  return myFunction;
}
const increment = createCounter();
const c1 = increment();
const c2 = increment();
const c3 = increment();
console.log("example increment", c1, c2, c3); // 1, 2, 3
```

#### Explanation

When file execute a code, A self calling function execute and initialized a local variable counter and function initialized in a myFunction variable. Self calling function return function definition of myFunction. Every time createCounter function called it will return an incremented value like:

0+1 = 1
1+1 = 2
2+1 = 3
and so on…

### Conclusion:

The key to remember is that when a function gets declared, it contains a function definition and a closure. The closure is a collection of all the variables in scope at the time of creation of the function.

### Partial Application Concept

## What is partial application ?

Patial application refers to the process of fixing a number of arguments to a function also referred to prefilling a function. Producing another function of smaller arity. In simpler terms, we call an argument with fewer arguments than it expects and it returns a function with the remaining arguments.

Example 1

```javascript
const join = (input, prefill) => input + prefill;

const myFunc = (fn, prefill) => {
  const partial = input => {
    const output = fn(input, prefill);
    return output;
  };
  return partial;
};

const result = myFunc(join, "@gmail.com");
result("test"); // test@gmail.com
result("test2"); // test2@gmail.com
```

Example 2

```javascript
const add = (a, b) => a + b;

const myFunc = (fn, prefill) => {
  const partial = input => {
    const output = fn(fn, prefill);
    return ouput;
  };
  return partial;
};

const result = myFunc(join, 10);
result(5); // 15
result(50); // 60
```

### Explanation

In example 1, our function is expecting 2 parameters but we prefilled one of the paramaters with "@gmail.com"...So we called the function with fewer arguments than it expected we only called it with one argument and it already had the other argument.
