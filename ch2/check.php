<?php
$mysqli = new mysqli("localhost", "root", "zxcv", "db_semasite");
$mysqli->query("SET NAMES 'utf8'");
$success = $mysqli->query("INSERT INTO 'users'('name', 'email', 'password') VALUES ('fafCris', 'me@mail', '123')");
echo $success;
echo "Хоть что то работает?!";
$musqli->close ();
?>