---
title: Vue
extends: _layouts.documentation
description: Vue Dev Snippets
section: content
---

# Vue

---

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

### Component with loop template

```html
<template>
  <div id="app">
    <div v-for="student in studentList" :key="student.id">
      Hi, I am {{student.name}} from {{student.currentClass}}.
    </div>
  </div>
</template>

<script>
  export default {
    name: 'App',
    data() {
      return {
        studentList: [
          {
            id: 1,
            name: 'Alpha',
            currentClass: 'XII-A'
          },
          {
            id: 2,
            name: 'Bravo',
            currentClass: 'XII-B'
          },
          {
            id: 3,
            name: 'Charlie',
            currentClass: 'XII-C'
          }
        ]
      };
    }
  }
</script>
```
