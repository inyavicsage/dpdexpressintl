<?php

require 'funcs.php';

if (!isset($_GET['SN'])) {
	header('Location: index.php?msg=Err1: An error occured. Please try again later.');
	exit();
}

$db_conn = db_conn();

$query = 'DELETE FROM `tracking_infos` WHERE `SN` = "' . $_GET["SN"] . '"';

if (!(mysqli_query($db_conn, $query))) {
    header('Location: index.php?msg=Err2: The record could not be deleted from the database. Please try again later.');
} else {
	header('Location: index.php?msg=The record has been deleted from the database.');
}

exit();
