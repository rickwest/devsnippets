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

## Write current file, if modified, and exit
```bash
ZZ
```

## Delete

### Delete a whole line
```bash
dd 
```

### Delete a character
```bash
 x
```

## Moving the Cursor

### Move down
```bash
j    
```

### Move up
```bash
k
```

### Move left
```bash
h
```

### Move right
```bash
l
```

> Note: Like many vim commands, above movements can be prefixed by a number to move several lines at a time.
```bash
4j # move 4 rows down
6k # move 6 rows up
```


### Move to top of the document
```bash
gg
```

### Move to vertically centre line of visible document
```bash
M
```

### Move to bottom of the document
```bash
G
```

### Move to the beginning of the line
```bash
0
```

### Move to the end of the line
```bash
$
```

## Basic word movements

### Move to beginning of next word
```bash
w
```

### Move to beginning of next word after a whitespace
```bash
W
```

### Move to previous beginning of word
```bash
b
```

### Move to beginning of previous word before a whitespace
```bash
B
```

### Move to end of word
```bash
e
```

### Move to end of word before a whitespace
```bash
E
```

## Text Insertion

Vim is a 'modal' editor. This means you will cycle in between several different editing modes. It makes Vim extremely efficient once you get the hang of it. You'll normally find yourself between 'edit' and 'insert' modes.

`esc` will place you into normal mode.
`i` will place you into insert mode.

There are also a few more advance methods that come in handy.

`o` will move you down a line and place you into insert mode. This is useful when you find somewhere in the file you would like to start adding to.
`shift-a` will open up insert mode at the END of a line.

## Text Selection
There are two modes to select lines of code in vim. You can switch to them from normal mode.

### Visual Mode:
`v` will switch vim to visual mode (`-- VISUAL --` is displayed at bottom).

While in this mode, using any movement keys `hjkl`, selects the lines just like as clicking and selecting the code as in any editor.

### Visual Line Mode:
`V` will switch vim to visual lines mode (`-- VISUAL LINE --` is displayed at bottom).

When moving cursor around in this mode, no matter where your cursor is in that line the full line will be selected.

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
