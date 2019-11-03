---
extends: _layouts.documentation
section: content
title: SCSS
description: SCSS Snippets
---

##Nested Selectors
Selectors can be nested!

```scss
body {
  font-size: 20px;
  .content {
    background-color: dodgerblue;
  }
}
```


## Variables
Variables can be used to keep common values consistent by only defining them once

```scss
$color: green;

body {
  background-color: $color;
}
```

## Mixins
Mixins are groups of styles which get applied to the selector they are included in

```scss
@mixin btn() {
  padding: 0.5em 1em;
  cursor: pointer;
  background-color: white;
  border: 1px solid darkred;
  color: darkred;
}

#create {
  @include btn;
  font-size: 1.2rem;
}
```