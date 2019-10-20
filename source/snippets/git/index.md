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

### Initialize a Git repository

```bash
git init
```

### Show the working tree status

Check the status of the repository

```bash
git status
```

### Add file contents to the index

Prepare one file and stage for the next commit.
```bash
git add someFile
```

Prepare all the content (tracked and untracked files) and stage for the next commit.

```bash
git add .
```
or
```bash
git add -A
```
`-A` stands for All

### Record changes to the repository

Use the given `<msg>` as the commit message. If multiple -m options are given, their values are concatenated as separate paragraphs.

```bash
git commit -m"your commit message"
```

---

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
Note: `-u` is a short-hand for setting up remote tracking on the pushed branch.

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

Creates a new branch without switching to it
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
