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

---

## Stashing

### Stash

When you want to switch branches but aren't ready to commit your changes, you can stash them away.

```bash
git stash
```

### Stash List

To see a list of the stashes you've stored.

```bash
git stash list
```
### Apply Stash 

To reapply your last stash

```bash
git stash apply
```

To apply an older stash, use your <code>git stash list</code> and append the stash number you want to apply to <code>git stash apply</code>.

```bash
git stash apply stash@{1}
```
