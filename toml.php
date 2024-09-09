#!/usr/bin/env php
<?php

require 'src/Toml.php';

$data = file_get_contents('php://stdin');

try {
	$parsed = Toml::parse($data);
}
catch (Exception $e) {
	echo $e->getMessage() . PHP_EOL;
	exit(1);
}

echo json_encode($parsed);
exit(0);
