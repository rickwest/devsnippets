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

