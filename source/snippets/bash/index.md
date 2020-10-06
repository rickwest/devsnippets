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

## Delete Folder and Files

```bash
# non-empty (deletes folder and everything inside)
rm -rf folder_name

# empty folder or a file
rm folder_name
rm file_name
```

## Find Processes By Port In Use

```bash
# useful when you need to kill a process running on background and can't Ctrl+C it, for example a dev build of an app using localhost

# list process running on port e.g. 3000
lsof -i:port_number

# kill any process running on port
kill $(lsof -t -i:port_number)

# kill single process running on port (first command returns PID)
kill PID_number

```
