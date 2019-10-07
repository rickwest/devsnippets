---
extends: _layouts.documentation
section: content
title: C++ Program Structure
description: C++ Dev Snippets
---

# C++

## First steps with C++

Let us look at a simple code that would print the words Hello World.

```bash
# Simple Hello world
```
\#include <iostream>
using namespace std;

// main() is where program execution begins.
int main() {
   cout << "Hello World"; // prints Hello World
   return 0;
}
```

# Let us look at the various parts of the above program −
The C++ language defines several headers, which contain information that is either necessary or useful to your program. For this program, the header <iostream> is needed.

* The line using namespace std; tells the compiler to use the std namespace. Namespaces are a relatively recent addition to C++.

* The next line '// main() is where program execution begins.' is a single-line comment available in C++. Single-line comments begin with // and stop at the end of the line.

* The line int main() is the main function where program execution begins.

* The next line cout << "Hello World"; causes the message "Hello World" to be displayed on the screen.

* The next line return 0; terminates main( )function and causes it to return the value 0 to the calling process.



# Compile and Execute C++ Program

* Let's look at how to save the file, compile and run the program. Please follow the steps given below −

* Open a text editor and add the code as above.

* Save the file as: hello.cpp

* Open a command prompt and go to the directory where you saved the file.

* Type 'g++ hello.cpp' and press enter to compile your code. If there are no errors in your code the command prompt will take you to the next line and would generate a.out executable file.

* Now, type 'a.out' to run your program.

* You will be able to see ' Hello World ' printed on the window.

```
$ g++ hello.cpp
$ ./a.out
Hello World
```
Make sure that g++ is in your path and that you are running it in the directory containing file hello.cpp.

You can compile C/C++ programs using makefile. For more details, you can check our 'Makefile