<?php

function db_conn() {
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'dpdexpressintl';

	$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Database connection failed.');

	return $db_conn;
}

function get_tracking_infos() {
	$tracking_infos = [];

	$db_conn = db_conn();

	$query = 'SELECT * FROM `tracking_infos`';
	if ($result = mysqli_query($db_conn, $query)) {
	    if (mysqli_num_rows($result) != 0) {
	        while ($row = mysqli_fetch_assoc($result)) {
	            $tracking_infos[$row['SN']] = $row;
	        }
	    }
	}

	return $tracking_infos;
}

function get_record($SN) {
	$record = [];

	$db_conn = db_conn();

	$query = 'SELECT * FROM `comp_sales_sys` WHERE `SN` = "' . $SN . '" LIMIT 1';
    if ($result = mysqli_query($db_conn, $query)) {
        if (mysqli_num_rows($result) != 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                $record = $row;
            }
        }
    }

	return $record;
}
