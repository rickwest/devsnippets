---
title: Bash - Key Bindings
description: Bash Keybindings
extends: _layouts.documentation
section: content
---

# Shell Keybindings

## Navigation 🚀
Alt + f/b  - Move cursor to previous/next word
Ctrl + a/e - Move cursor to beginning/end of command
Ctrl + xx  - Toggle between the start of line and current cursor position
---
## Editing ✏️
Ctrl + x,e   - Open command in editor
Ctrl + k     - Cut till end
Ctrl + u     - Delete whole line (zsh)/ cut until beginning (bash)
Alt + w      - Delete until beginning (zsh)
Alt + l/u    - Lowercase/Uppercase word
Alt + c       - Capitalize word
Ctrl + w     - Cut previous word
Alt + Del    - Delete previous word
Alt + d        - Delete next word
Alt +. or !$ - Previous commands last arguement
!*                - All arguments of previous command
Alt + t        - Swap current word with previous
Ctrl + t       - Swap the last two characters before the cursor (typo). <br>
Esc + t       - Swap the last two words before the cursor
Ctrl + y      - Paste
Ctrl + _      - Undo
Alt + r        - Cancel the changes, revert
---
## Process 📊
Ctrl + l - Clear screen
Ctrl + c - Interrupt/Kill
Ctrl + d - Close current shell
Ctrl + s - Stop output to the, use PgUp/PgDn for navigation
Ctrl + z - Background/Foreground job
---
## History ⏳
Ctrl + r   - History search
Ctrl + s   - Go back to the next most recent command
^abc^def   - Run previous command, replacing abc with def
---
## Modes 🕹️
Ctrl +x,v - vi mode (zsh)
set -o vi - Vi mode
