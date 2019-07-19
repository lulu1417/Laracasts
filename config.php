<?php
return [
	'database' => [
		'name' => 'mytodo',
		'username' => 'root',
		'password' => '0000',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
		],
	], //why is this comma needed?
];