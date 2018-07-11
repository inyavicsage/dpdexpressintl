<?php

session_start();
require 'funcs.php';
require_login();

if (!isset($_GET['tracking-no'])) {
	header('Location: index.php?msg=Err1: An error occured. Please try again later.');
	exit();
}

$query = 'DELETE FROM `tracking_infos` WHERE `tracking_no` = "' . $_GET['tracking-no'] . '"';

if (!(mysqli_query(db_conn(), $query))) {
    header('Location: index.php?msg=Err2: The tracking info could not be deleted from the database. Please try again later.');
} else {
	header('Location: index.php?msg=The tracking info has been deleted from the database.');
}

exit();
