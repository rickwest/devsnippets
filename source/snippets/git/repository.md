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
