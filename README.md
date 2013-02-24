PHP TOML parser
===============

PHP parser for TOML language.


Status
------
Work in progress.
Arrays are not supported.


TODO
----

- Support arrays


Requirements
------------

- PHP 5.2+


Installation
------------

Grab src/toml.php and put it where you need it.


Usage
-----

```
<?php
require("../src/toml.php");

// Parse TOML string
$tomlStr = file_get_contents('example.toml');
$result = Toml::parse($tomlStr);


// Parse TOML file path
$result = Toml::parseFile('example.toml');
```
