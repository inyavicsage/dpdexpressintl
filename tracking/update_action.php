<?php

require 'funcs.php';

if (!isset($_POST['submit'])) {
	header('Location: index.php?msg=Err1: An error occured. Please try again later.');
	exit();
}

$SN = $_POST['SN'];
$cust_name = $_POST['cust_name'];
$cust_addr = $_POST['cust_addr'];
$cust_phone_num = $_POST['cust_phone_num'];
$item_bought = $_POST['item_bought'];
$item_sold = $_POST['item_sold'];
$unit_price = $_POST['unit_price'];
$total_amt = $_POST['total_amt'];
$total_expen = $_POST['total_expen'];
$date = $_POST['date'];
$qty = $_POST['qty'];

$db_conn = db_conn();

$query = 'UPDATE `comp_sales_sys` SET `cust_name` = "' . $cust_name . '", `cust_addr` = "' . $cust_addr . '",
`cust_phone_num` = "' . $cust_phone_num . '", `item_bought` = "' . $item_bought . '", `item_sold` = "' . $item_sold . '",
`unit_price` = "' . $unit_price . '", `total_amt` = "' . $total_amt . '", `total_expen` = "' . $total_expen . '",
`date` = "' . $date . '", `qty` = "' . $qty . '" WHERE `SN` = "' . $SN . '"';

if (!(mysqli_query($db_conn, $query))) {
    header('Location: index.php?msg=Err2: The record could not be updated in the database. Please try again later.');
} else {
	header('Location: index.php?msg=The record has been updated in the database.');
}

exit();
