---
title: Git
description: Git Dev Snippets
extends: _layouts.documentation
section: content
---

# Git

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

### Switch to a branch

Changes to a branch based on name

```bash
git checkout branchname
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

### Record changes to the repository

Use the given <msg> as the commit message. If multiple -m options are given, their values are concatenated as separate paragraphs.

```bash
git commit -m"your commit message"
```