---
extends: _layouts.documentation
section: content
title: Ruby Iteration
description: Ruby Iteration Dev Snippets
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