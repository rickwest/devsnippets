---
title: PHP - File System
description: PHP File System Snippets
extends: _layouts.documentation
section: content
---

# File System

## Get (Human Readable) File Size 

```php
<?php

function MakeReadable($bytes) {
    $i = floor(log($bytes, 1024));
    return round($bytes / pow(1024, $i), [0,0,2,2,3][$i]) . ['B','kB','MB','GB','TB'][$i];
}
```

Example


```php
echo MakeReadable(120030005.12);
```

```bash
114.47MB
```
