---
extends: _layouts.documentation
section: content
title: Ruby
description: Ruby Dev Snippets
---

# Ruby

## Iterations

### for
```ruby
for i in 1..10 do
  puts "Iteration number " + i.to_s
end
```

### while
```ruby
i = 1
while i <= 10
  puts "Iteration number " + i.to_s
  i += 1
end
```

### number + times method

```ruby
10.times do |i|
    puts "Iteration number " + i.to_s
end
```

### number + upto method
```ruby
1.upto(10) do |i|
    puts "Iteration number " + i.to_s
end
```

### range + each
```ruby
(1..10).each do |i|
    puts "Iteration number " + i.to_s
end
```

## Array sorting

### numbers
```ruby
[1, 25, 5, 15, 10, 20].sort
# => [1, 5, 10, 15, 20, 25]
```

### strings
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

## Array filtering

### numbers
```ruby
[1, 25, 5, 15, 10, 20].select{ |number| number > 5}
# => [25, 15, 10, 20]
```

### strings
```ruby
['Banana', 'Apple', 'Mango', 'Passionfruit', 'Pineapple'].select{ |fruit| fruit.length > 5}
# => ["Banana", "Passionfruit", "Pineapple"]
```