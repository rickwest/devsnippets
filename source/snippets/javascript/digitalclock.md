---
title: Javascript - DigitalClock
description: Print current time by console
extends: _layouts.documentation
section: content
---

# DigitalClock

A simple digital clock that prints by console the hour in 24 hours format.

```js
let timer = () => {
    
  let today = new Date();
  let hours = today.getHours();
  let minutes = today.getMinutes();
  let seconds = today.getSeconds();

  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  console.log(hours + ":" + minutes + ":" + seconds);
  
}


let digitalClock = setInterval(timer,1000);
```