<?php
	$orm_string = 'mysql:host='.getenv('DB_HOST').";dbname=".getenv('DB_NAME');

	ORM::configure($orm_string);
	ORM::configure('username', getenv('DB_USER'));
	ORM::configure('password', getenv('DB_PASS'));
?>
