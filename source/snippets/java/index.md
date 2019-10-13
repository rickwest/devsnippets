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

Type - Every function in java need to have a type before your name and this is a type of your return. When a function have a type,  needs 
to have a return, only exception is void type, when your function dosen't have a return.

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

