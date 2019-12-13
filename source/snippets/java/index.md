---
title: Java
extends: _layouts.documentation
description: Java Dev Snippets
section: content
---

# Java

### Class

All java code must have a class In this example, it is the main and also a method of public static, inside which will be written the code and where the programs start.

### Code

```Java

// How we print hello world in java

class Main {
  public static void main(String[] args) {
    System.out.println("Hello world!");
  }
}

```


## Variable

Java is a strongly typed programming language because every variable must be declared with a data type. We have
int, boolean, float, double, string

### Code

```java
class Main {
  public static void main(String[] args) {
    int a = 5;
    double c = 5.7;
    String d = "Carlos";
    boolean e = true;


    //showing variables content

    System.out.println("Int: "+a);
    System.out.println("Double: "+b);
    System.out.println("String: "+c);
    System.out.println("Boolean: "+d);
  }
}
```

## Functions or methods

To create  functions on Java we have three requirements: type, parameter and static or not.

Type - Every function in java needs to have a type before your name and this is a type of your return. When a function have a type,  needs 
to have a return, the only exception is void type, when your function dosen't have a return.

psvm = public static void main

Static - When your write your functions out of psvm and you need to run in there, java require your function by a static, if write 
your function.

Parameters - Method parameters need types to work.

Just write your function off psvm method.

### Code

```java
public class App{
    
    static void showName(){
        System.out.println("My name is João");
    }

    static int calAge (int year, int bornYear){
        int age = year-bornYear;

        return age;
    }

    static String country(){
        return "Brazil";
    }


    public static void main( String[] args ){

        showName();
        System.out.println("I have "+calAge(2019,1999)+" years old. ");
        System.out.println("I live in "+country());
         
    }


}
```

## Conditional statements in java

Conditional statements are used to perform different actions based on different conditions. There are 2 ways of doing this in java
1. If else
2. Switch case

### If else Code

```java
class Main {
  public static void main(String[] args) {
    int num = 5;
    if(num > 10){
      System.out.println("num is greater than 10");    
    } else if(num > 2){
      System.out.println("num is greater than 2");
    }    
  }
}
```

### Switch case code

```java
class Main {
  public static void main(String[] args) {
    int num = 5;
    switch(num){
      case 1: System.out.println("Num is 1");
              break;
      case 3: System.out.println("Num is 3");
              break;
      case 5: System.out.println("Num is 5");
              break              
    }    
  }
}
```

### Loops in java

A loop allows to repeatedly execute a group of statements. There are 4 kinds of loops in java
1. While loop
2. Do while loop
3. For loop
4. foreach loop


### While loop code

```java
class Main {
  public static void main(String[] args) {
    int[5] numbers = {1, 2, 3, 4, 5};
    int size = numbers.length;
    int i = 0;
    while(i < size){
      System.out.println(numbers[i]);
      i++;
    }
  }
}
```

### Do while loop code

```java
class Main {
  public static void main(String[] args) {
    int[5] numbers = {1, 2, 3, 4, 5};
    int size = numbers.length;
    int i = 0;

    do{
      System.out.println(numbers[i]);
      i++;
    } while(i < size);
  }
}
```

### For loop code

```java
class Main {
  public static void main(String[] args) {
    int[5] numbers = {1, 2, 3, 4, 5};
    int size = numbers.length;
    
    for(int I = 0; i < size; i++){
      System.out.println(numbers[i]);
    }
  }
}
```

### For each loop code

```java
class Main {
  public static void main(String[] args) {
    int[5] numbers = {1, 2, 3, 4, 5};
    int size = numbers.length;
    
    for(int num: nnumbers){
      System.out.println(num);
    }
  }
}
```

### Java Singleton

In object-oriented programming, a singleton class is a class that can have only one object (an instance of the class) at a time.

### Code

```Java

public class SimpleSingleton {
	private static SimpleSingleton singleInstance =  new SimpleSingleton();

	//Marking default constructor private
	//to avoid direct instantiation.
	private SimpleSingleton() {
	}

	//Get instance for class SimpleSingleton
	public static SimpleSingleton getInstance() {

		return singleInstance;
	}
}
```

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

```java
    for(int i=1;i<=10;i++){  
        System.out.println(i);  
    }
```


### for each

The syntax of Java for-each loop consists of a variable and an array or collection of the same data type separated by :.

```java
    for(data_type variable : array | collection){  
    //Statement  
    }  
```

The Java for-each loops the collection until the last element. For each element, it stores the element in the variable and executes the statement.

Example of for-each:

```java
   String coffe[]={"Espresso","Americano","Cappuccino","Cortado"};    
   for(String c:arr){  
     System.out.println("Do you want a " + c);  
   }
```

### while loop

It is a statement that executes a statement repeatedly until the given boolean condition is false.

```java
	while(condition){  
		//statement
	}
```
Example of while:

```java
	int i=1;  
	while(i<=10){  
		System.out.println(i);  
		i++;  
	} 
```


### do-while loop

It is like the while loop but it exectues the statement at least once.

```java
	do{  
		//statement  
	}while(condition); 
```

Example of do while

```java
	int i=1;  
	do{  
		System.out.println(i);  
		i++;  
	}while(i<=10); 
```

