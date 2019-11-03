---
title: Go
extends: _layouts.documentation
description: GOlang Dev Snippets
section: content
---

# Go

### Hello Word
```go
package main

import "fmt"

func main() {
  message := greetMe("world")
  fmt.Println(message)
}

func greetMe(name string) string {
  return "Hello, " + name + "!"
}
```

### Variables

#### Strings
```go
str := "Hello"
str := `Multiline
  string`
```

#### Numbers
```go
num := 3          // int
num := 3.         // float64
num := 3 + 4i     // complex128
num := byte('a')  // byte (alias for uint8)
```

#### Arrays
```go
// var numbers [5]int
numbers := [...]int{0, 0, 0, 0, 0}
```

#### Pointers
```go
func main () {
  b := *getPointer()
  fmt.Println("Value is", b)
}
 
func getPointer () (myPointer *int) {
  a := 234
  return &a
}
``` 

### Flow Control

#### Conditional
```go
if day == "sunday" || day == "saturday" {
  rest()
} else if day == "monday" && isTired() {
  groan()
} else {
  work()
}
``` 

#### Statements in if
```go
if _, err := getResult(); err != nil {
  fmt.Println("Uh oh")
}
``` 

#### Switch
```go
switch day {
  case "sunday":
    // cases don't "fall through" by default!
    fallthrough

  case "saturday":
    rest()

  default:
    work()
}
```

#### For-Range loop
```go
entry := []string{"Jack","John","Jones"}
for i, val := range entry {
  fmt.Printf("At position %d, the character %s is present\n", i, val)
}
```

#### For loop
```go
for count := 0; count <= 10; count++ {
  fmt.Println("My counter is at", count)
}
```