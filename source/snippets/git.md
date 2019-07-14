---
title: Git
description: Git Snippets
extends: _layouts.documentation
section: content
---

# Git

### Create a new repository on the command line

```bash
echo "# devsnippets" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/rickwest/devsnippets.git
git push -u origin master
```

### Push an existing repository from the command line

```bash
git remote add origin https://github.com/rickwest/devsnippets.git
git push -u origin master
```

