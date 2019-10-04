---
title: Vue
extends: _layouts.documentation
description: Vue Dev Snippets
section: content
---

# Vue

<!-- ## Components -->

### Component

Basic Vue Component Scaffold.
> Note: If using SCSS add lang="scss" to style tag.

```html
<template>
  <div id="app">

  </div>
</template>

<script>
  export default {
    name: 'App',
  }
</script>

<style>

</style>
```

### Component method with Click Event and Data-Binding

```html
<template>
  <div id="app" @click="myMethod">
    {{ result }}
  </div>
</template>

<script>
  export default {
    name: 'App',
    data() {
      return {
        result: ''
      };
    }
    methods: {
      myMethod() {
        this.$data.result = 'This is our method result';
      }
    }
  }
</script>
```
