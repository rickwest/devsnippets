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

## C# Strings

Strings are used for storing text.

```csharp
string greeting = "Hello";
```

## String Length

A string in C# is actually an object, which contain properties and methods that can perform certain operations on strings. For example, the length of a string can be found with the Length property:

```csharp
string txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
Console.WriteLine("The length of the txt string is: " + txt.Length);
```

## Other Methods

There are many string methods available, for example ToUpper() and ToLower(), which returns a copy of the string converted to uppercase or lowercase:

```csharp
string txt = "Hello World";
Console.WriteLine(txt.ToUpper());   // Outputs "HELLO WORLD"
Console.WriteLine(txt.ToLower());   // Outputs "hello world"
```

## String Concatenation

The + operator can be used between strings to combine them. This is called concatenation:

```csharp
string firstName = "John ";
string lastName = "Doe";
string name = firstName + lastName;
Console.WriteLine(name);
```

You can also use the string.Concat() method to concatenate two strings:

```csharp
string firstName = "John ";
string lastName = "Doe";
string name = string.Concat(firstName, lastName);
Console.WriteLine(name);
```
