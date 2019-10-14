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





