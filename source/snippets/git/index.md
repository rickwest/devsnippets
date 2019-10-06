---
title: Git
description: Git Dev Snippets
extends: _layouts.documentation
section: content
---

# Git

## Repositories

### Create a new repository

Create a new repository on the command line.

```bash
echo "# devsnippets" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/rickwest/devsnippets.git
git push -u origin master
```

### Push an existing repository

Push an existing repository to a remote location from the command line.

```bash
git remote add origin https://github.com/rickwest/devsnippets.git
git push -u origin master
```

---

## Branches

### List branches

List existing branches. Current branch will be highlighted with an asterisk.

```bash
git branch --list
```

List existing remote branches.

```bash
git branch -r
# or
git branch --remote
```

List all existing branches (local and remote).

```bash
git branch -a
# or
git branch --all
```

### Compare branches

Lists the differences between two different branches.

```bash
git diff branchname1 branchname2
```

### Create a new branch

Creates a new branch and switches to it

```bash
git checkout -b branchname
```

### Switch to a branch

Changes to a branch based on name

```bash
git checkout branchname
```
