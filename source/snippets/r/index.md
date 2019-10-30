---
extends: _layouts.documentation
section: content
title: R
description: R Dev Snippets
---

# R

## Iterations

### for
```r
f <- function(v){
    #code
}

x <- 1:10
for (val in x) {
    print(paste("Iteration number ", val))
}
```

### while
```r
i <- 1
while(i <= 10) {
    print(paste("Iteration number ", i))
    i = i + 1
}
```

## Functions

### simple function
```r
f <- function(){
    #code goes here
}
```
