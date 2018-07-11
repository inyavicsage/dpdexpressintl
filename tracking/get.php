<?php
	require 'funcs.php';
	include 'header.php';

	if (!isset($_GET['tracking-no'])) {
		header('Location: ../index.html?msg=Err1: An error occured. Please try again later.');
		exit();
	}

	$tracking_info = get_tracking_infos($_GET['tracking-no']);

	if (empty($tracking_info)) {
		header('Location: ../index.html?msg=Tracking info not found.');
		exit();
	}
?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="well well-sm">
			<h2 align="center">Tracking Info</h2>
			<ul class="list-group">
			  <li class="list-group-item">Tracking No: <?php echo $tracking_info[0]['tracking_no']; ?></li>
			  <li class="list-group-item">Shipper Name: <?php echo $tracking_info[0]['shipper_name']; ?></li>
			  <li class="list-group-item">Shipper Phone: <?php echo $tracking_info[0]['shipper_phone']; ?></li>
			  <li class="list-group-item">Shipper Address: <?php echo $tracking_info[0]['shipper_addr']; ?></li>
			  <li class="list-group-item">Receiver Name: <?php echo $tracking_info[0]['receiver_name']; ?></li>
			  <li class="list-group-item">Receiver Phone: <?php echo $tracking_info[0]['receiver_phone']; ?></li>
			  <li class="list-group-item">Consignment No: <?php echo $tracking_info[0]['consign_no']; ?></li>
			  <li class="list-group-item">Ship Type: <?php echo $tracking_info[0]['ship_type']; ?></li>
			  <li class="list-group-item">Weight: <?php echo $tracking_info[0]['weight']; ?></li>
			  <li class="list-group-item">Invoice No: <?php echo $tracking_info[0]['invoice_no']; ?></li>
			  <li class="list-group-item">Booking Mode: <?php echo $tracking_info[0]['booking_mode']; ?></li>
			  <li class="list-group-item">Total Freight: <?php echo $tracking_info[0]['total_freight']; ?></li>
			  <li class="list-group-item">Mode: <?php echo $tracking_info[0]['mode']; ?></li>
			  <li class="list-group-item">Pickup Date/Time: <?php echo $tracking_info[0]['pickup_date_time']; ?></li>
			  <li class="list-group-item">Estimated Time of Arrival: <?php echo $tracking_info[0]['est_time_of_arrival']; ?></li>
			  <li class="list-group-item">Status: <?php echo $tracking_info[0]['status']; ?></li>
			  <li class="list-group-item">Current Location: <?php echo $tracking_info[0]['current_loc']; ?></li>
			  <li class="list-group-item">Comment: <?php echo $tracking_info[0]['comment']; ?></li>
			  <li class="list-group-item">Comment 2: <?php echo $tracking_info[0]['comment2']; ?></li>
			  <li class="list-group-item">Comment 3: <?php echo $tracking_info[0]['comment3']; ?></li>
			</ul>
		</div>
		<button class="btn btn-primary" onclick="myFunction()">PRINT</button>
	</div>
	<div class="col-md-3"></div>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
<?php include 'footer.php'; ?>