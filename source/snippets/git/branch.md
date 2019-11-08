---
title: Git
description: Git Dev Snippets
extends: _layouts.documentation
section: content
---

# Git

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

Just create a new branch
```bash
git branch branchname
```


### Switch to a branch

Changes to a branch based on name

```bash
git checkout branchname
```

### Work on remote branch

Clones a remote branch locally, and sets it up to track the remote branch

```bash
git checkout --track remote-name/branch-name
```
or equivalently
```bash
git checkout -b branch-name remote-name/branch-name
```

### Merge a branch

To merge a branch into another, you need to do the following

1. **Checkout** the branch/master you wish to merge _into_
2. Merge the required branch into this one

```bash
git checkout branchname
git merge my-new-function
```

### Push local branch to remote

Creates a new branch locally and then on a remote

```bash
git checkout -b branch-name
git push remote-name branch-name
```

### Rebase a branch

Rebasing is another way to integrate changes from one branch to another. It will move the commits of that branch to a new base commit.
To rebase a branch into another, you need to do the following

1. Checkout to the branch you wish to rebase
2. Rebase this branch to the required branch.

```bash
git checkout new-branch
git rebase master
```
This will change the base of new-branch to the latest commit in master.

### Delete a branch

Deletes a branch thats no longer required (eg after a merge)

```bash
git branch -d branchname
```

### Delete a remote branch

Deletes a remote branch, e.g a branch in your GitHub repo. Note that you'll still have to delete the local branch using the above snippet, if you want to completely remove the branch.

```bash
git push -d remote-name branch-name
```

Where remote-name(generally 'origin' for GitHub) is the name of the remote where you want to delete the branch from, and branch-name is the branch you wish to delete.
