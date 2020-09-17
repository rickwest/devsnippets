---
extends: _layouts.documentation
section: content
title: CSS
description: CSS Snippets
---

# Media queries

## Detect if user's browser is IE 10 / 11

```
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {

}
```

## Device breakpoints

It is impossible to create the perfect experience for every device on the market but this list of typical media queries can help you decide on the right break point for your content.

For device specific media queries check out this page on [CSS Tricks](https://css-tricks.com/snippets/css/media-queries-for-standard-devices/).

```
/* Small devices (mobile phones) */
@media only screen and (max-width: 600px) {...}

/* Medium devices (tablets) */
@media only screen and (min-width: 768px) {...}

/* Large devices (laptops/desktops) */
@media only screen and (min-width: 992px) {...}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {...}

```

### Adding variables in CSS3

Variables, that are introduced in CSS3, can be used to define certain values beforehand, so that it can be used through out the file.

```
:root {
    --bg-color: orangered;
    --general-border: 2px solid white;
    --font-size-large: 18px;
}

#div1 {
    font-size: var(--font-size-large);
    background-color: var(--bg-color);
    border: var(--general-border);
}
```

---
