---
title: Git
description: Git Dev Snippets
extends: _layouts.documentation
section: content
---

# Git

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

## Making your branch even with remote master

### Add the remote repository

To add the remote repository

```bash
git remote add upstream "link of the git repository"
```

This will add the remote repository by the name of upstream.
P.s. write the link without the "" .

### Fetching from remote repository

To fetch changes from remote repository

```bash
git fetch upstream
```

### Pulling Changes from upstream "branchname"

To pull changes from an upstream branch to your current branch.

```bash
git pull upstream "branchname"
```
P.s. write the branchname without the "". Generally master.

### Delete local changes to master

This will delete all the local changes made to master.

```bash
git reset --hard upstream/"branchname"
```
 Not necessary if you have not made any changes.

### Pushing changes to your forked master

This will delete all the changes on forked master and will make your branch even with the upstream branch.

```bash
git push origin "branchname" --force
```

P.s. --force is required when your repository is ahead of upstream, otherwise you can also push normally.
