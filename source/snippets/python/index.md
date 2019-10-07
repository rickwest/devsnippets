---
extends: _layouts.documentation
section: content
title: Using Requirements for Python Program Distribution
description: Python Snippets
---

```bash
# Get the requirments to a file
pip freeze -r myrequiremets.txt


# Installing the modules from the requirments file
pip install -r myrequirements.txt


```

---
extends: _layouts.documentation
section: content
title: Preventing user input during sleep
description: This function disables all user input if used after a sleep function. As this uses the msvcrt module, this is only usable on Microsoft Windows.
---
'''python
import msvcrt
def disableInput():
    while msvcrt.kbhit(): msvcrt.getwch()

#example usage
time.sleep(5)
disableInput()
input("Press enter to continue...")

'''
