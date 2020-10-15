---
extends: _layouts.documentation
section: content
title: Python
description: Python Dev Snippets
---

# Python

## Requirements

```bash
# Get the requirments to a file
pip freeze -r myrequiremets.txt


# Installing the modules from the requirments file
pip install -r myrequirements.txt


```

---

## Preventing user input during sleep.

This function disables all user input if used after a sleep function. As this uses the msvcrt module, this is only usable on Microsoft Windows.

```python
import msvcrt
def disableInput():
    while msvcrt.kbhit(): msvcrt.getwch()

#example usage
time.sleep(5)
disableInput()
input("Press enter to continue...")

```

---

## Python 3 f-strings: formatted string literals

The new f-Strings are string literals that start with an `f` at the beginning, and allow for expressions to be evaluated inside of curly braces. This is way easier to keep track of, especially with a long set of parameters and strings.

#### Simple Syntax
```python
name = "Sal"
age = 33
f"Hello, {name}. You are {age}"
# 'Hello, Sal. You are 33.'

# Capital `F` is also valid
F"Hello, {name}. You are {age}"
# 'Hello, Sal. You are 33.'

# The output returned is a string, with single quotes, but you can wrap f-Strings in the print command, too.
print(f"{name} is {age} and that is great!")
# Sal is 33 and that is great!
```
#### Arbitrary Expressions
Since f-Strings are evaluated at runtime, you can put any valid Python expression inside of them. This allows for some cool things to happen!
```python
# The basics
f"{2 * 21}"
# '42'

# You can call functions
def to_lowercase(input):
    return input.lower()

name = "Sal Mac"
f"{to_lowercase(name)} loves to code."
# 'sal mac loves to code.'

```

---

## Two Matrix Multiplication

The following python snippet is for multiplication of two matrix. simply using for loops & list.

```python
r1 = int(input("Enter no. of rows of first matrix : "))
c1 = int(input("Enter no. of columns of first matrix : "))
r2 = int(input("Enter no. of rows of second matrix : "))
c2 = int(input("Enter no. of columns of second matrix : "))
C = []
D = []
A = []

print("\nFirst Matrix :")
for i in range(r1):

    temp1 = []
    for i in range(c1):

       temp1.append(float(input("Enter a value : "))) #values of first matrix
    A.append(temp1)

B = []
print("\nSecond Matrix :")
for i in range(r2):

    temp2 = []
    for i in range(c2):

       temp2.append(float(input("Enter a value : "))) #values of second matrix
    B.append(temp2)

print("\nFirst Matrix : ",A)
print("Second Matrix : ",B)

for i in range(r1):
    for j in range(c2):
        s= 0
        for k in range(c1):
            s = s+(A[i][k]*B[k][j]) # perform matrix multiplication
        C.append(s)

    D.append(C)
    C = []

print("\nFinal Matrix : ",D) # final matrix after multiplication
```

## Useful Function - Force 2 Decimals
This function returns the given integer as a string with 2 decimals points, useful for prices.
```python
def forceTwoDecimals(integer):
    if str(round(integer,2)) == str(round(integer,1)):
        return str(integer)+"0"
    else:
        return str(integer)
```

## Useful Function - isPalindrome
This function returns true if a given string is a palindrome
```python
def isPalindrome(str):
    return str == str[::-1]
```
## Useful Function -  Reversing A string
```python
test_string="test string"
reverse_test_string=test_string[::-1]
print(reverse_test_string)
```
Output: "gnirts tset"

## Useful Function -  Convert two lists into a dictionary
```python
def convert_to_dictionary(keys, values):
    return dict(zip(keys, values))

keys = [1, 2, 3]
values = ['X', 'Y', 'Z']
print(convert_to_dictionary(keys, values)) # {1: 'X', 2: 'Y', 3: 'Z'}
```


## Iteration

## For Loop

The following example uses a for loop to find the number of occurrences of a specified sub_string. In below example, the number returned would be 2.

```python
def count_substring(string, sub_string):
    count = 0
    for i in range(len(string)):
        if string[i:].startswith(sub_string):
            count += 1
    return count
count_substring('hello', 'l')
```

## While Loop

The following example uses a while loop to find the factorial on an integer n.

```python
def factorial(n):
    result = 1
    while(n >= 1):
        result = result * n
        n = n - 1
    return result
factorial(5)
```


### Printing ASCII value of character
Python program to print ASCII Value of Character 
```python
  
c = '*'
print("The ASCII value of '" + c + "' is", ord(c))

OUTPUT:The ASCII value of g is 42

```
### Quick Math

This script is used to add (or multiply or divide or subtract) multiple numbers in a single command line.
```python

import math
import sys

if len(sys.argv) < 4:
    print("Usage: quickmath.py <add|mul|div|sub|avg> <num01> <num02> [num03..num99]")
    exit(1)

w_addition = {"+", "add", "addition", "plus"}
w_subtraction = {"-", "sub", "subtraction", "minus"}
w_multiply = {"*", "x", "mul", "multiply"}
w_divide = {"/", "div", "divide"}

for counter in range(2, len(sys.argv)):
    if not sys.argv[counter].isdigit():
        print("Usage: quickmath.py <add|mul|div|sub|avg> <num01> <num02> [num03..num99]")
        exit(1)

result = float(sys.argv[2])

if sys.argv[1] in w_addition:
    for counter in range(3, len(sys.argv)):
        result = result + float(sys.argv[counter])
elif sys.argv[1] in w_subtraction:
    for counter in range(3, len(sys.argv)):
        result = result - float(sys.argv[counter])
elif sys.argv[1] in w_multiply:
    for counter in range(3, len(sys.argv)):
        result = result * float(sys.argv[counter])
elif sys.argv[1] in w_divide:
    for counter in range(3, len(sys.argv)):
        result = result / float(sys.argv[counter])
else:
    print("Usage: quickmath.py <add|mul|div|sub|avg> <num01> <num02> [num03..num99]")
    exit(1)

print(str(result))
```
### Validate JSON

This script will read a file and either pass the file as being a valid JSON file, or die a horrible death.
```python
#!/usr/bin/env python3

import os
import sys
import json

if len(sys.argv) > 1:
    if os.path.exists(sys.argv[1]):
        file = open(sys.argv[1], "r")
        json.load(file)
        file.close()
        print("Validate JSON!")
    else:
        print(sys.argv[1] + " not found")
else:
    print("Usage: checkjson.py <file>")
```

### Generate Random Password

This script will generate random password with following rules:
1. 6-20 characters
2. at least one uppercase character
3. at least one lowercase character
4. at least one digit
5. at least one special character (!, @, #, $, %, ^, &, *)
6. no more than 2 characters repeating consecutively 
 
```python
import random

LOWERCASE_CHARS = tuple(map(chr, xrange(ord('a'), ord('z')+1)))
UPPERCASE_CHARS = tuple(map(chr, xrange(ord('A'), ord('Z')+1)))
DIGITS = tuple(map(str, range(0, 10)))
SPECIALS = ('!', '@', '#', '$', '%', '^', '&', '*')

SEQUENCE = (LOWERCASE_CHARS,
            UPPERCASE_CHARS,
            DIGITS,
            SPECIALS,
            )

def generate_random_password(total, sequences):
    r = _generate_random_number_for_each_sequence(total, len(sequences))

    password = []
    for (population, k) in zip(sequences, r):
        n = 0
        while n < k:
            position = random.randint(0, len(population)-1)
            password += population[position]
            n += 1
    random.shuffle(password)
    
    while _is_repeating(password):
        random.shuffle(password)
        
    return ''.join(password)

def _generate_random_number_for_each_sequence(total, sequence_number):
    """ Generate random sequence with numbers (greater than 0).
        The number of items equals to 'sequence_number' and
        the total number of items equals to 'total'
    """
    current_total = 0
    r = []
    for n in range(sequence_number-1, 0, -1):
        current = random.randint(1, total - current_total - n)
        current_total += current
        r.append(current)
    r.append(total - sum(r))
    random.shuffle(r)

    return r

def _is_repeating(password):
    """ Check if there is any 2 characters repeating consecutively """
    n = 1
    while n < len(password):
        if password[n] == password[n-1]:
            return True
        n += 1
    return False

if __name__ == '__main__':
    print generate_random_password(random.randint(6, 30), SEQUENCE)
```


#### Note :
As a python developer, be careful with Python indentation. sometimes even if lines look visually indented, from python perspective they maybe are not indented & causes errors. IDEs like PyCharm are useful for debugging and avoiding common errors such as this.
