---
extends: _layouts.documentation
section: content
title: C# 
description: C# Dev Snippets
---

# C&#35;

## Shuffle an Array

Method to shuffle an array of strings in place.

```csharp
private void Shuffle(string[] e)
{
	var rnd = new Random();
	string temp;
	for (int i = e.Length - 1; i > 0; i--)
	{
		int j = rnd.Next(0, i);
		temp = e[i];
		e[i] = e[j];
		e[j] = temp;
	}
}
```
# C&#35;

## Bubble Sort

Method to sort an arry using bubble sort

```csharp
 public static void Main(string[] args)
         { 
            int[] a = { 3, 0, 2, 5, -1, 4, 1 }; 
			int t; 
			Console.WriteLine("Original array :");
            foreach (int aa in a)                       
            Console.Write(aa + " ");                     
            for (int p = 0; p <= a.Length - 2; p++)
            {
                for (int i = 0; i <= a.Length - 2; i++)
                {
                    if (a[i] > a[i + 1])
                    {
                        t = a[i + 1];
                        a[i + 1] = a[i];
                        a[i] = t;
                    }
                } 
            }
            Console.WriteLine("\n"+"Sorted array :");
            foreach (int aa in a)                       
            Console.Write(aa + " ");
			Console.Write("\n"); 
            
        }
```		