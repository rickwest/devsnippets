---
title: Javascript
extends: _layouts.documentation
description: Javascript Dev Snippets
section: content
---

# Javascript

- [Variables](#variables)
- [Arrays](#arrays)
- [Objects](#objects)
- [Strings](#strings)
- [Dates](#dates)
- [Promises](#promises)
- [Useful Functions](#useful-functions)
- [Closures](#closures)

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
It is similar to the variable we declare in other languages.

The let declaration is only supported beginning in [ECMAScript6 (ES6)](http://es6-features.org/#BlockScopedVariables)

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

The const declaration is only available bsupported beginning in [ECMAScript6 (ES6)](http://es6-features.org/#Constants).

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

### find, map, filter, and reduce
All of these array methods provide a declarative programming alternative to writing a loop. Each performs some block of code, given in a callback function, to some or all elements of an array.

Find() and filter() are used to select values from an array that meet some condition.

Map() is used to apply a transformation to all elements of an array, and reduce() is used to apply some accumulation to the values in an array.

### Using the find() Method

[Array.prototype.find()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/find) is the inbuilt function in JavaScript which is used to get a value of the first item in the array that meets the provided condition.

If more than one item meets the condition, then the first item satisfying the condition is returned. Processing stops when the first matching value is found. This is accomplished by providing a callback function to find() that returns true when a value in the array meets some condition.

**Find returns a single value from the array, or null if no matching value is found.**

#### When to use find()
When you want to find the **first** value in an array that meets some condition.

#### Example: finding an odd number in an array
This is how you would use find to find the first odd number in an array of numbers

##### Code

```javascript
const numbers = [2,4,6,5,6,7];

let firstOddNumber = numbers.find((number) => number % 2 === 1);

console.log(firstOddNumber); // 5
```

#### Using the filter() method

[Array.prototype.filter()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/filter) is a built in JavaScript function that returns a subset of the original array in which all of the values match some condition. Like with find, the callback function passed to filter returns either true or false. If it returns true then filter adds that element to the return array, and if it returns false the element is not included. 

**Filter returns an array with all values that meet the condition, or an empty array if no value meet the condition.**

#### When to use filter()
Use filter when you want **all the values** from an array that meet some condition. 

#### Example: filter all even numbers in a numeric array
This is how you would use filter() to get all even numbers in an array of numbers.

##### Code
```javascript
const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

const evenNumbers = numbers.filter(number => number % 2 === 0);
console.log(evenNumbers); // [2, 4, 6, 8]
```

### Using the map() method

[Array.prototype.map()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/map) is a built in JavaScript function that applies some transformation to every element of an array.

It does this by running a callback function on each element in the array, and returns a new array with the values returned by the callback function.

**Map returns an array that is the same length as the original array.**

#### When to use map()
When you want to apply some function on all elements of an array. 

#### Example: doubling the values in a numeric array
This is how you would use map() to return a new array with the values in the original array doubled.

##### Code
```javascript
const original = [1, 2, 3, 4];

const double = original.map(val => val * 2);
console.log(double); // [2, 4, 6, 8]
```

#### Using the reduce() method

Just like map(), [Array.prototype.reduce()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce) also runs a callback for each element of an array. What’s different here is that reduce passes the result of this callback (the accumulator) from one array element to the other, accumulating the result.

**Reduce returns a single value that is some accumulation of values in the array.**

#### When to use reduce()
Use reduce() when you want to accumulate the values in an array into a single value.

#### Example - accumulating student scores from an array of objects
In this example, we want the sum of all student scores from the given array of objects. 

##### Code

We have an array with students and their respective score. We can use reduce() to get the total score as shown here.

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

const totalScore = students.reduce((total, student) => total + student.score, 0); // 0 is used as the initial value for total

console.log(totalScore); // 165
```

#### Using the join() method

The [join()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/join) method will join all the elements of an array into a string. It has an optional _separator_ parameter. If no parameter is given, the elements are separated with a comma.

#### When to use join()
Use join() when you want to represent the values in an array as a single, delimited string.

##### Code
```javascript
const arr = ["Lions", "tigers", "bears."];

const str = arr.join(" and ");

console.log(str); //"Lions and tigers and bears."
```

### List items from an array until a specific string is found

##### Code
```javascript
let cards = ['Diamond', 'Spade', 'Heart', 'Club'];

let currentCard = 'Heart';

while (currentCard !== 'Spade') {
       	console.log(currentCard);
  			currentCard = cards[Math.floor(Math.random() * 4)];
       }
console.log('found a spade');
```

---

### Objects

You can use objects to store functions, other objects and properties, so you can create more descriptive code. Objects are easy and widely used in javascript.

### Code 

```javascript 
const car = {
    name: 'Ferrari',
    year: 2015,
    horsepower: 670,
    isCar: true
}
console.log(`The ${car.name} of ${car.year} has a hoserpower of ${car.horsepower} and is really a car ? ${car.isCar}`)

//Another example with functions

const calc = {
    sum: function(a,b){
        return a+b;
    },
    subtraction: function(a,b){
        return a-b;
    }
}

console.log(`The sum of 5 plus 4 is ${calc.sum(5,4)} and the subtraction is ${calc.subtraction(5,4)}`)


//An example with nested objects and functions

const computer ={
    monitor: 'Acer',
    cpu: {
        name: 'FX-6300',
        core: 6,
        socket: 'AM3 +'
    },
    gpu:{
        name: 'GTX-950',
        memory: 2
    },
    ram:{
        name: 'Hyperx',
        gb: 8
    },
    printDetails: function() {
        console.log(`My computer has a monitor ${computer.monitor}, a cpu ${computer.cpu.name} with ${computer.cpu.core} cores, GPU ${computer.gpu.name} and ${computer.ram.gb} of ram.`)
    }
}

computer.printDetails();
```

## Strings

### Template strings (string interpolation)

Instead of using string concatenation, we can use a template string, or string interpolation, to include interpreted values in strings.

#### Example: using template strings to print values
You can use template strings to print variable values, or the results of functions - anything that can be interpreted by javascript.

### Code
```javascript
const name = 'Cristian'
const age = 20

function myCountry(){
  return 'Brazil'
}

// Using concatenation:
console.log('My name is '+name+' and i am '+age+' years old and i live in '+myCountry()+'.')

// Using template string:
console.log(`My name is ${name} and I am ${age} years old and I live in ${myCountry()}.`)
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
```javascript
const str = "All work and no play makes Jack a dull boy"

// First the string is split into an array:
const arr = str.split(" ");

// Then the letters of each word/element in the array are reversed
const arr2 = arr.map((x) => x.split("").reverse().join(""));
// ["llA", "krow", "dna", "on", "yalp", "sekam", "kcaJ", "a", "llud", "yob"]

// Then join each element together again, making sure to use a separator.
const newStr = arr2.join(" ");

console.log(newStr); // "llA krow dna on yalp sekam kcaJ a llud yob"

// Then go watch The Shining.
```

#### Using replace() to strip off any html tag from a given html text.

The syntax for [replace()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/replace) is:

```javascript
replace(pattern|matchString, replaceString|function)
```

Where the first parameter "pattern" can be a regular expression, or a string and the second parameter can be a string that you want to replace with or a function that can be called for a matched pattern/string.

You can strip the html tags from any string with the regular expression: ```/<(?:.|\n)*?>/gi```

#### Example: Strip html tags from an h1 header
This is how you could use replace with the regular expression above to strip the h1 tags from a string.

##### Code
```javascript
function stripHtmlTags(htmlText){
	if(htmlText && htmlText.length){
		return htmlText.replace(/<(?:.|\n)*?>/gi, ''); // g is for global replace, i for ignore case.
	}
	return htmlText;
}
const str = "<h1>replace() method in javascript is really powerful.</h1>";

console.log(stripHtmlTags(str)); // "replace() method in javascript is really powerful."

```

#### Using the match() method
The [match()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/match) method is similar to replace(), but it simply returns an array with all values from the string that match the expression given.

#### Example: finding all vowels in a string using match()
To find all vowels in a string we can use match() as shown here.

##### Code
```javascript
let input = "A fox runs fast. Oh, how fast it runs!";

let vowels = input.match(/[aeiouAEIOU]/g);
```

In this example, `vowels` is an array containing all of the vowels:

```javascript
console.log(vowels);
// [ 'A', 'o', 'u', 'a', 'O', 'o', 'a', 'i', 'u' ]
```
---

## Dates

#### Add/Sub time period to/from a Date variable

to add a period (for example 10 minutes) to Date variable in javascript.

```javascript
function addSecond(date, seconds) {
  // Time period is in milliseconds so you must multiply second with 1000
  return new Date(date.getTime() + seconds * 1000);
}

// add 60 seconds to current time
expired = addSecond(new Date(), 60);
```

---

## Promises

#### Using the Promise.race() method

The [Promise.race()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise/race) method is used to act on the first promise in a group of promises that resolves or rejects.

When we pass multiple promises to the Promise.race method, it executes the callback for the first promise that resolves/rejects.

#### Example: demonstrating Promise.race() with setTimeout
This trivial example will just demonstrate how Promise.race() works using setTimeout.

#### Code
```javascript
const firstPromise = new Promise((res, rej) => {
  setTimeout(res, 500, "one");
});

const secondPromise = new Promise((res, rej) => {
  setTimeout(res, 100, "two");
});

Promise.race([firstPromise, secondPromise]).then(res => console.log(res));
```

---

## Useful functions

#### Whitelist Checker

Checks provided keys in reqInput are in whiteList or not

##### Code
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

#### Random Generator

Returns a random number between provided min and max numbers

##### Code
```javascript
/**
* @param  		{!number} 		  min       {Minimum number to be GTE in output number}
* @param  		{!number} 		  max       {Maximum number to be LTE in output number}
*/
generateRandomNumber(min, max) => {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
```

#### Merge Objects

Returns a random number between provided min and max numbers

##### Code
```javascript
const person = { name: 'Lucas Azambuja', lang: 'pt-br' };
const languages = { javascript: true, csharp: false };
const preferences = { background: 'black', size: 1024, gpu: true };

const summary = {...person, ...languages, ...preferences};

/*
Object {
  "name": "Lucas Azambuja",
  "lang": "pt-br",
  "javascript": true,
  "csharp": false,
  "background": "black",
  "size": 1024,
  "gpu": true
}
*/
```

#### Promisify

Converts an asynchronous function to return a promise.

_In Node 8+, you can use util.promisify_

Use currying to return a function returning a Promise that calls the original function. Use the ...rest operator to pass in all the parameters.

##### Code
```javascript
const promisify = func => (...args) =>
  new Promise((resolve, reject) =>
    func(...args, (err, result) => (err ? reject(err) : resolve(result)))
  );

// Example
const delay = promisify((d, cb) => setTimeout(cb, d));
delay(2000).then(() => console.log('Hi!')); // Promise resolves after 2s
```
---

## Closures

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
