---
extends: _layouts.documentation
section: content
title: Vim Snippets
description: Vim Snippets
---
# Vim  

## Open vim

```bash
vim FILENAME
```

## Delete

> Note: delete a whole line

```bash
dd 
```
> Note: Delete a character

```bash
 x
```

## Moving the Cursor

> Note: key looks like a down arrow.

```bash
j    
```

> Note: key looks like a up arrow.

```bash
k
```

> Note: key is at the left and moves left.

```bash
h
```

> Note: key is at the right and moves right.

```bash
l
```

## Text Insertion

Vim is a 'modal' editor. This means you will cycle in between several different editing modes. It makes Vim extremely efficient once you get the hang of it. You'll normally find yourself between 'edit' and 'insert' modes.

`esc` will place you into edit mode.
`i` will place you into insert mode.

There are also a few more advance methods that come in handy.

`o` will move you down a line and place you into insert mode. This is useful when you find somewhere in the file you would like to start adding to.
`shift-a` will open up insert mode at the END of a line.

## Copy/Paste

```bash
yy # copies/yanks the current line
p # pastes the line
```

## Macros

Vim has a powerful macro system, but there is also a very easy way to get started.

1. Hit `esc` and then hit `i` to enter insert mode. As soon as you do this, your actions are being recorded. Type a word such as 'test'
2. Now hit `esc` again. You have ended the recording.
3. Press the `.` key. You'll notice that Vim prints out 'test'. Press the `.` key as many times as you like and it will repeat the same action.

This simple action can be used to duplicate anything you want in Vim. The sky is the limit.

