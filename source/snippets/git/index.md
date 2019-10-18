---
title: Git
description: Git Dev Snippets
extends: _layouts.documentation
section: content
---

# Git

---

### Create a Directory
```bash
mkdir <FOLDER_NAME>
```

### Create Empty File
```bash
touch <FILE_NAME_WITH_TYPE>
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
# or
git add -A
```
> Note: `-A` stands for All

### Record changes to the repository

Use the given <YOUR_COMMIT_MESSAGE\> as the commit message. If multiple `-m` options are given, their values are concatenated as separate paragraphs.

```bash
git commit -m "<YOUR_COMMIT_MESSAGE>"
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

### Push to an existing repository

Push an existing repository to a remote location from the command line.

```bash
git remote add origin https://github.com/<USERNAME>/<REPOSITORY>.git
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
git diff <BRANCHNAME_1> <BRANCHNAME_2>
```

### Create a new branch

Creates a new branch and switches to it

```bash
git checkout -b <BRANCHNAME>
```

Just create a new branch
```bash
git branch <BRANCHNAME>
```

### Switch to a branch

Changes to a branch based on name

```bash
git checkout <BRANCHNAME>
```

### Merge a branch

To merge a branch into another, you need to do the following

1. **Checkout** the branch/master you wish to merge _into_
2. Merge the required branch into this one

```bash
git checkout <BRANCHNAME_TO_MERGE_IN>
git merge <BRANCHNAME_TO_MERGE>
```

### Rebase a branch

Rebasing is another way to integrate changes from one branch to another. It will move the commits of that branch to a new base commit.
To rebase a branch into another, you need to do the following

1. Checkout to the branch you wish to rebase
2. Rebase this branch to the required branch.

```bash
git checkout <BRANCHNAME>
git rebase master
```
This will change the base of new-branch to the latest commit in master.

### Delete a branch

Deletes a branch thats no longer required (eg after a merge)

```bash
git branch -d <BRANCHNAME>
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

To re-apply your last stash

```bash
git stash apply
```

> Note: To apply an older stash, use your `git stash list` and append the stash number you want to apply to `git stash apply`. e.g.
```bash
git stash apply stash@{1}
```

---

## Making your branch even with remote master

### Add the remote repository

To add the remote repository

```bash
git remote add upstream <LINK_OF_REMOTE_GIT_REPOSITORY>
```

This will add the remote repository by the name of upstream.

### Fetching from remote repository

To fetch changes from remote repository

```bash
git fetch upstream
```

### Pulling Changes from upstream branch

To pull changes from an upstream branch to your current branch.

```bash
git pull upstream <BRANCHNAME>
```

### Delete local changes to master

This will delete all the local changes made to master.

```bash
git reset --hard upstream/<BRANCHNAME>
```

> Note: Not necessary if you have not made any changes.

### Pushing changes to your forked master

This will delete all the changes on forked master and will make your branch even with the upstream branch.

```bash
git push origin <BRANCHNAME> --force
```

> Note: `--force` is required when your repository is ahead of upstream, otherwise you can also push normally.

---

## Configuration

The configuration file `.gitconfig` can be used to fine-tune the git according to users' choice. This configuration file is located at:
* For Windows:
    ```bash
    C:\Users\%USERPROFILE%\.gitconfig
    ```
* For *nix systems (Linux, macOS):
    ```bash
    ~/.gitconfig
    ```
