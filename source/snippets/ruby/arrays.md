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