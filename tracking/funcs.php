<?php

function db_conn() {
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'dpdexpressintl';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn) die('Database connection failed.');

	return $conn;
}

function areset(array $vars) {
	foreach ($vars as $var) {
		if (!isset($_POST[$var]))
			return false;
	}

	return true;
}

function require_login() {
	if (!isset($_SESSION['username'])) {
		header('Location: tracking/login.php?msg=Login required.');
		exit();
	}
}

function get_tracking_infos($tracking_no = null) {
	$tracking_infos = [];

	$query = 'SELECT * FROM `tracking_infos`';

	if ($tracking_no != null)
		$query .= ' WHERE `tracking_no` = "' . $tracking_no . '" LIMIT 1';
	
	if ($result = mysqli_query(db_conn(), $query)) {
	    if (mysqli_num_rows($result) != 0) {
			$i = 0;
	        while ($row = mysqli_fetch_assoc($result)) {
				$tracking_infos[$i] = $row;
				$i++;
	        }
	    }
	}

	return $tracking_infos;
}
