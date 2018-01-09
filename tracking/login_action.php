<?php

session_start();
require 'funcs.php';

if (!isset($_POST['submit'])) {
	header('Location: login.php?msg=Err1: An error occured. Please try again later.');
	exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$db_conn = db_conn();

$query = 'SELECT 1 FROM `accounts` WHERE `username` = "' . $username . '" AND `password` = "' . $password . '"';
if (mysqli_num_rows(mysqli_query($db_conn, $query)) != 0) {
	$_SESSION['username'] = $username;
	header('Location: index.php');
	exit();
}

header('Location: login.php?msg=Incorrect login details.');
exit();