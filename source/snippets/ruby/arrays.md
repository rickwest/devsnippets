---
extends: _layouts.documentation
section: content
title: Ruby Array
description: Ruby Array Dev Snippets
---

# Ruby

## Array

### Sorting Numbers

```ruby
[1, 25, 5, 15, 10, 20].sort
# => [1, 5, 10, 15, 20, 25]
```

### Sorting Strings

```ruby
['Banana', 'Apple', 'Mango', 'Passionfruit', 'Pineapple'].sort
# => ["Apple", "Banana", "Mango", "Passionfruit", "Pineapple"]
```

### sort_by method

```ruby
arr = ['Banana', 'Apple', 'Mango', 'Passionfruit', 'Pineapple']
arr.sort_by{ |word| word.length }
# => ["Apple", "Mango", "Banana", "Pineapple", "Passionfruit"]
```

### Flatten an array of arrays

```ruby
arr = [1, 2, [3, 4, [5, 6,], 7, 8]
print arr.flatten
# => [1, 2, 3, 4, 5, 6, 7, 8]
```

### Subtract two arrays

```ruby
arr1 = [1, 2, 3, 4]
arr2 = [3, 4, 5, 6]
puts arr1 - arr2
# => [1, 2]
puts arr2 - arr1
# => [5, 6]
```

---
