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

## Repositories

### Create a new repository

Create a new repository on the command line

```bash
echo "# devsnippets" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/rickwest/devsnippets.git
git push -u origin master
```

### Push an existing repository

Push and existing repository from the command line

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

### Merge a branch

To merge a branch into another, you need to do the following

1. **Checkout** the branch/master you wish to merge _into_
2. Merge the required branch into this one

```bash
git checkout branchname
git merge my-new-function
```


### Delete a branch

Deletes a branch thats no longer required (eg after a merge)

```bash
git branch -d branchname 
```

### Create a commit
 
Create a commit 

```bash
git commit -m "Put your mesagge here"
```

### Create  aliases

one little tip that can make your Git experience simpler and easier

```bash
git config --global alias.co checkout
```

