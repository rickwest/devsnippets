---
title: PHP - Connection
description: PHP Connection with mySQL and Oracle Dev Snippets
extends: _layouts.documentation
section: content
---

# Connections with mySQL and Oracle Database

## Create Connection with mySQL


```php
<?php
$hostname= "localhost";
$username = "username";
$password = "password";
$conn = new mysqli($hostname, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successful";
?>
```

## Create Connection with Oracle Database 

Before you do so, you need to check if the versions of PHP, XAMPP, Oracle SQL Developer and Instant client are compatible. If not, there will be issues with the connection.

Below are the versions that are known to work together:
* PHP arch: x86 version: 7.2.12
* XAMPP: x64 
* Oracle Database : 12c 
* Oracle Instant Client version: 32 bit 

```php
<?php
    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = yyy.yyy.y.yy)(PORT = xxxx)))(CONNECT_DATA=(SID=orcl)))" ;
    // yyy.yyy.y.yy -> IP Address
    // xxxx -> Port No
    if($c = OCILogon("system", "your database password", $db))
    {
        echo "Successfully connected.\n";
        OCILogoff($c);
    }
    else
    {
        $err = OCIError();
        echo "Connection failed." . $err[text];
    }
?>
```
