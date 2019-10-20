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

