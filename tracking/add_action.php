<?php

require 'funcs.php';

if (!isset($_POST['submit'])) {
	header('Location: add.php?msg=Err1: An error occured. Please try again later.');
	exit();
}

$shipper_name = $_POST['shipper_name'];
$shipper_phone = $_POST['shipper_phone'];
$shipper_addr = $_POST['shipper_addr'];
$receiver_name = $_POST['receiver_name'];
$receiver_phone = $_POST['receiver_phone'];
$consign_no = $_POST['consign_no'];
$ship_type = $_POST['ship_type'];
$weight = $_POST['weight'];
$invoice_no = $_POST['invoice_no'];
$booking_mode = $_POST['booking_mode'];
$total_freight = $_POST['total_freight'];
$mode = $_POST['mode'];
$pickup_date_time = $_POST['pickup_date_time'];
$est_time_of_arrival = $_POST['est_time_of_arrival'];
$status = $_POST['status'];
$current_loc = $_POST['current_loc'];
$comment = $_POST['comment'];
$comment2 = $_POST['comment2'];
$comment3 = $_POST['comment3'];


$db_conn = db_conn();

$query = 'INSERT INTO `comp_sales_sys`
(`cust_name`, `cust_addr`, `cust_phone_num`, `item_bought`, `item_sold`, `unit_price`, `total_amt`, `total_expen`, `date`, `qty`)
VALUES ("' . $cust_name . '", "' . $cust_addr . '", "' . $cust_phone_num . '", "' . $item_bought . '", "' . $item_sold . '",
"' . $unit_price . '", "' . $total_amt . '", "' . $total_expen . '", "' . $date . '", "' . $qty . '")';

if (!(mysqli_query($db_conn, $query))) {
    header('Location: index.php?msg=Err2: The record could not be added to the database. Please try again later.');
} else {
	header('Location: index.php?msg=The record has been added to the database.');
}

exit();
