---
title: Git
description: Git Dev Snippets
extends: _layouts.documentation
section: content
---

# Git

### Create a Directory
```bash
mkdir <folder-name>
```

### Create Empty File
```bash
touch <file-name-with-type>
```

### Initialize Git

```bash
git init
```

### Show the working tree status

Check the status of the repository

```bash
git status
```

### Add file contents to the index

Prepare the content staged for the next commit.

```bash
git add .
```
or


```bash
git add -A
```
A stands for All

### Record changes to the repository

Use the given `<msg>` as the commit message. If multiple -m options are given, their values are concatenated as separate paragraphs.

```bash
git commit -m "your commit message"
```

### Rewrite the most recent commit message

Did you mess up with your `<msg>` and need to update it before pushing it upstream?
```bash
git commit --amend
```

Then press **Enter** -> this will open your old message in your default text editor, edit the message, and save the commit.
