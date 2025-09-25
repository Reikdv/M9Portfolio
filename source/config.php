<?php
$dbconfig = parse_ini_file("../.env");

$host = $dbconfig["DB_HOST"];
$dbname = $dbconfig["DB_NAME"];
$user = $dbconfig["DB_USERNAME"];
$dbpassword = $dbconfig["DB_PASSWORD"];
$dbrootpassword = $dbconfig["DB_ROOT_PASSWORD"];