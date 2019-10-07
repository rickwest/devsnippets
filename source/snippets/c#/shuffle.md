---
extends: _layouts.documentation
section: content
title: Shuffle an Array 
description: Method to randomize an Array
---



#Shuffle

Method to randomize an array of Strings.

```bash
private void Shuffle(String[]e)
        {
            
            var rnd = new Random();
            String temp;
            for (int i = e.Length-1 ; i > 0; i--)
            {
                int j = rnd.Next(0, i);
                temp= e[i];
                e[i] = e[j];
                e[j] = temp;
            }
        }

```

