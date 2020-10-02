---
extends: _layouts.documentation
section: content
title: C++ Program Structure
description: C++ Dev Snippets
---

# C++

## First steps with C++

Let us look at a simple code that would print the words Hello World.

# Simple Hello world
```
#include <iostream>
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

# C++ function for Binary search in an array

```
int binarySearch(int array[], int left, int right, int element)
{
   while (left <= right) {
      int middle = left + (right - left) / 2;

      // Check if element is present at mid
      if (array[middle] == element)
         return middle;

      // If element greater, ignore left half
      if (array[middle] < element)
         left = middle + 1;

      // If element is smaller, ignore right half
      else
         right = middle - 1;
   }

   // If element is not present
   return -1;
}
```

# C++ function to efficiently check if a number is prime or not

```
bool isPrime(int n)
{

    if (n <= 1)
        return false;
    if (n <= 3)
        return true;

    // This is checked so that we can skip
    // middle five numbers in below loop
    if (n % 2 == 0 || n % 3 == 0)
        return false;

    for (int i = 5; i * i <= n; i = i + 6)
        if (n % i == 0 || n % (i + 2) == 0)
            return false;

    return true;
}
```

# C++ function to merge sort an array

```
// Merges two subarrays of arr[].
// First subarray is arr[l..m]
// Second subarray is arr[m+1..r]

void merge(int arr[], int l, int m, int r)
{
    int i, j, k;
    int n1 = m - l + 1;
    int n2 =  r - m;

    // create temp arrays
    int L[n1], R[n2];

    // Copy data to temp arrays L[] and R[]
    for (i = 0; i < n1; i++)
        L[i] = arr[l + i];
    for (j = 0; j < n2; j++)
        R[j] = arr[m + 1+ j];

  //  Merge the temp arrays back into arr[l..r]
    i = 0; // Initial index of first subarray
    j = 0; // Initial index of second subarray
    k = l; // Initial index of merged subarray
    while (i < n1 && j < n2)
    {
        if (L[i] <= R[j])
        {
            arr[k] = L[i];
            i++;
        }
        else
        {
            arr[k] = R[j];
            j++;
        }
        k++;
    }

    // Copy the remaining elements of L[], if there are any

    while (i < n1)
    {
        arr[k] = L[i];
        i++;
        k++;
    }

    // Copy the remaining elements of R[], if there  are any

    while (j < n2)
    {
        arr[k] = R[j];
        j++;
        k++;
    }
}

// l is for left index and r is right index of the
//   sub-array of arr to be sorted

void mergeSort(int arr[], int l, int r)
{
    if (l < r)
    {
        // Same as (l+r)/2, but avoids overflow for large l and h

        int m = l+(r-l)/2;

        // Sort first and second halves

        mergeSort(arr, l, m);
        mergeSort(arr, m+1, r);
        merge(arr, l, m, r);
    }
}
```
