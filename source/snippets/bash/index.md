---
extends: _layouts.documentation
section: content
title: Bash Snippets
description: Bash Snippets
---

## Bash

### Show Shell
```bash
echo $0
echo $SHELL
```

### Avaiable Shell
```bash
cat /etc/shells
```
### Where I am?
```bash
echo "You're: $(pwd)"
echo "You're: `pwd`"
```

### Variables
```bash
NAME="Your Name"
echo $NAME
echo "$NAME"
echo "${NAME} :)"
```

### Conditional
```bash
git commit && git push
git commit || echo "Commit failed"
```

### Functions
```bash
get_name() {
  echo "Some Name"
}

echo "You are $(get_name)"
```

### Conditional Execution
```bash
str="hi"
if [[ -z "$str" ]]; then
  echo "Is empty"
elif [[ -n "$str" ]]; then
  echo "Is not empty"
fi
```



