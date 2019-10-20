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


## Two Matrix Multiplication 

The following python snippet is for multiplication of two matrix. simply using for loops & list.

```python
r1 = int(input("Enter no. of rows of first matrix : "))
c1 = int(input("Enter no. of coloumns of first matrix : "))
r2 = int(input("Enter no. of rows of second matrix : "))
c2 = int(input("Enter no. of coloumns of second matrix : "))
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

### Reversing A string
test_string="test string"
reverse_test_string=test_string[::-1]
print(reverse_test_string)

Output: "gnirts tset"

## Using Loops
Like in any other language there are many loop functions in python. Here are the two common ones.

### For Loop
```python
array = [2, 3, 5, 7]
for element in array:
    print(element)
```

### While Loop
```python
i = 0
while i < 10:
    print(count)
    count += 1
```

#### Note :
As a python developer, be careful with Python indentation. sometimes even if lines look visually indented, from python perspective they maybe are not indented & causes errors.
