<?php

include_once "config.php";

$connect = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB);
if (!$connect) {
	die("Connection failed: " . $connect->connect_error);
}