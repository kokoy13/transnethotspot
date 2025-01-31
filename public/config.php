<?php

$host_ip = $_SERVER['172.16.100.253'];
$db_user = $_SERVER['root'];
$db_pass = $_SERVER['@Dante1231905'];
$db_name = $_SERVER['transnethotspot'];
$table_name = $_SERVER['user'];

$con = mysqli_connect($host_ip, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
  echo "Failed to connect to SQL: " . mysqli_connect_error();
}

mysqli_report(MYSQLI_REPORT_OFF);