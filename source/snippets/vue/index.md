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

<!-- ## Slots in Vue -->

### Slots in Vue

Question : What is slots in vue js ?
Answer : Slots are a mechanism for Vue components that allows you to compose your components in a way other than the strict parent-child relationship. Slots give you an outlet to place content in new places or make components more generic
In other way we can say slots can be use to place any content inside children from parent, let see in above example : 

```html
// child.vue
<template>
  <div class="child">
    <slot></slot>
  </div>
</template>
```

Here is simple child component which has slots inside. let's move to the parent component which App.vue,

```html
// app.vue
<template>
<child>
<img src="an-image.jpg">
</child>
</template>
```

So simply we're using child component in App.vue(parent component) & passing it an image element as a slot so
it will render inside child component & replace `<slot></slot>` to the image element.
So we can pass anything through the slots.
