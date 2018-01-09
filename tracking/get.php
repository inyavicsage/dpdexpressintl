<?php
	require 'funcs.php';
	include 'header.php';

	if (!isset($_GET['tracking-no'])) {
		header('Location: index.php?msg=Err1: An error occured. Please try again later.');
		exit();
	}

	$tracking_info = get_tracking_info($_GET['tracking-no']);
?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="well well-sm">
			<h2 align="center">Tracking Info</h2>
			<ul class="list-group">
			  <li class="list-group-item">Tracking No: <?php echo $tracking_info['tracking_no']; ?></li>
			  <li class="list-group-item">Shipper Name: <?php echo $tracking_info['shipper_name']; ?></li>
			  <li class="list-group-item">Shipper Phone: <?php echo $tracking_info['shipper_phone']; ?></li>
			  <li class="list-group-item">Shipper Address: <?php echo $tracking_info['shipper_addr']; ?></li>
			  <li class="list-group-item">Receiver Name: <?php echo $tracking_info['receiver_name']; ?></li>
			  <li class="list-group-item">Receiver Phone: <?php echo $tracking_info['receiver_phone']; ?></li>
			  <li class="list-group-item">Consignment No: <?php echo $tracking_info['consign_no']; ?></li>
			  <li class="list-group-item">Ship Type: <?php echo $tracking_info['ship_type']; ?></li>
			  <li class="list-group-item">Weight: <?php echo $tracking_info['weight']; ?></li>
			  <li class="list-group-item">Invoice No: <?php echo $tracking_info['invoice_no']; ?></li>
			  <li class="list-group-item">Booking Mode: <?php echo $tracking_info['booking_mode']; ?></li>
			  <li class="list-group-item">Total Freight: <?php echo $tracking_info['total_freight']; ?></li>
			  <li class="list-group-item">Mode: <?php echo $tracking_info['mode']; ?></li>
			  <li class="list-group-item">Pickup Date/Time: <?php echo $tracking_info['pickup_date_time']; ?></li>
			  <li class="list-group-item">Estimated Time of Arrival: <?php echo $tracking_info['est_time_of_arrival']; ?></li>
			  <li class="list-group-item">Status: <?php echo $tracking_info['status']; ?></li>
			  <li class="list-group-item">Current Location: <?php echo $tracking_info['current_loc']; ?></li>
			  <li class="list-group-item">Comment: <?php echo $tracking_info['comment']; ?></li>
			  <li class="list-group-item">Comment 2: <?php echo $tracking_info['comment2']; ?></li>
			  <li class="list-group-item">Comment 3: <?php echo $tracking_info['comment3']; ?></li>
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