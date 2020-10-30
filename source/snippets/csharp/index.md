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

## Creating List

Code snippet adds items to the list.

```csharp
List<string> AuthorList = new List<string>();    

AuthorList.Add("Mahesh Chand");    
AuthorList.Add("Praveen Kumar");    
AuthorList.Add("Raj Kumar");    
AuthorList.Add("Nipun Tomar");    
AuthorList.Add("Dinesh Beniwal"); 
```