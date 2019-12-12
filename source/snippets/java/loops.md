---
title: Java loops
description: Java Dev Snippets
extends: _layouts.documentation
section: content
---

# Java

## Loops

### for loop

Is a for statement that iterates a part of the program multiple times.
It consists of four parts:

    -Initialization: It is executed once when the loop starts. 
    -Condition: It is executed each time to test the condition of the loop. It continues execution until the condition is false.
    -Statement: The statement of the loop is executed each time it's loops.
    -Increment/Decrement: It increments or decrements the variable value.

All of this parts are optional.

Example of a for loop: 

```
    for(int i=1;i<=10;i++){  
        System.out.println(i);  
    }
```


### for each

The syntax of Java for-each loop consists of a variable and an array or collection of the same data type separated by :.

```
    for(data_type variable : array | collection){  
    //Statement  
    }  
```

The Java for-each loops the collection until the last element. For each element, it stores the element in the variable and executes the statement.

Example of for-each:

```
   String coffe[]={"Espresso","Americano","Cappuccino","Cortado"};    
   for(String c:arr){  
     System.out.println("Do you want a " + c);  
   }
```

### while loop

It is a statement that executes a statement repeatedly until the given boolean condition is false.

```
	while(condition){  
		//statement
	}
```
Example of while:

```
	int i=1;  
	while(i<=10){  
		System.out.println(i);  
		i++;  
	} 
```


### do-while loop

It is like the while loop but it exectues the statement at least once.

```
	do{  
		//statement  
	}while(condition); 
```

Example of do while

```
	int i=1;  
	do{  
		System.out.println(i);  
		i++;  
	}while(i<=10); 
```


