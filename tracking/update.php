<?php
	session_start();
	require 'funcs.php';
	require_login();
	include 'header.php';

	if (!isset($_GET['tracking-no'])) {
		header('Location: index.php?msg=Err1: An error occured. Please try again later.');
		exit();
	}

	$tracking_info = get_tracking_infos($_GET['tracking-no']);
?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="well well-sm">
			<h2 align="center">Update Tracking Info</h2>
			<form class="form-horizontal" method="post" action="update_action.php">
				<input type="hidden" name="tracking_no" value="<?php echo $_GET['tracking-no']; ?>">
				<div class="form-group">
					<label for="shipper_name" class="col-sm-4 control-label">Shipper Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="shipper_name" value="<?php echo $tracking_info[0]['shipper_name']; ?>" placeholder="Enter shipper name here...">
					</div>
				</div>
				<div class="form-group">
					<label for="shipper_phone" class="col-sm-4 control-label">Shipper Phone:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="shipper_phone" value="<?php echo $tracking_info[0]['shipper_phone']; ?>" placeholder="Enter shipper phone here...">
					</div>
				</div>
				<div class="form-group">
					<label for="shipper_addr" class="col-sm-4 control-label">Shipper Address:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="shipper_addr" value="<?php echo $tracking_info[0]['shipper_addr']; ?>" placeholder="Enter shipper address here...">
					</div>
				</div>
				<div class="form-group">
					<label for="receiver_name" class="col-sm-4 control-label">Receiver Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="receiver_name" value="<?php echo $tracking_info[0]['receiver_name']; ?>" placeholder="Enter receiver name here...">
					</div>
				</div>
				<div class="form-group">
					<label for="receiver_phone" class="col-sm-4 control-label">Receiver Phone:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="receiver_phone" value="<?php echo $tracking_info[0]['receiver_phone']; ?>" placeholder="Enter receiver phone here...">
					</div>
				</div>
				<div class="form-group">
					<label for="consign_no" class="col-sm-4 control-label">Consignment No:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="consign_no" value="<?php echo $tracking_info[0]['consign_no']; ?>" placeholder="Enter consignment no here...">
					</div>
				</div>
				<div class="form-group">
					<label for="ship_type" class="col-sm-4 control-label">Ship Type:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="ship_type" value="<?php echo $tracking_info[0]['ship_type']; ?>" placeholder="Enter ship type here...">
					</div>
				</div>
				<div class="form-group">
					<label for="weight" class="col-sm-4 control-label">Weight:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="weight" value="<?php echo $tracking_info[0]['weight']; ?>" placeholder="Enter weight here...">
					</div>
				</div>
				<div class="form-group">
					<label for="invoice_no" class="col-sm-4 control-label">Invoice No:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="invoice_no" value="<?php echo $tracking_info[0]['invoice_no']; ?>" placeholder="Enter invoice no here...">
					</div>
				</div>
				<div class="form-group">
					<label for="booking_mode" class="col-sm-4 control-label">Booking Mode:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="booking_mode" value="<?php echo $tracking_info[0]['booking_mode']; ?>" placeholder="Enter booking mode here...">
					</div>
				</div>
				<div class="form-group">
					<label for="total_freight" class="col-sm-4 control-label">Total Freight:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="total_freight" value="<?php echo $tracking_info[0]['total_freight']; ?>" placeholder="Enter total freight here...">
					</div>
				</div>
				<div class="form-group">
					<label for="mode" class="col-sm-4 control-label">Mode:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="mode" value="<?php echo $tracking_info[0]['mode']; ?>" placeholder="Enter mode here...">
					</div>
				</div>
				<div class="form-group">
					<label for="pickup_date_time" class="col-sm-4 control-label">Pickup Date/Time:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="pickup_date_time" value="<?php echo $tracking_info[0]['pickup_date_time']; ?>" placeholder="Enter the pickup date/time here...">
					</div>
				</div>
				<div class="form-group">
					<label for="est_time_of_arrival" class="col-sm-4 control-label">Estimated Time of Arrival:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="est_time_of_arrival" value="<?php echo $tracking_info[0]['est_time_of_arrival']; ?>" placeholder="Enter the estimated time of arrival here...">
					</div>
				</div>
				<div class="form-group">
					<label for="status" class="col-sm-4 control-label">Status:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="status" value="<?php echo $tracking_info[0]['status']; ?>" placeholder="Enter status here...">
					</div>
				</div>
				<div class="form-group">
					<label for="current_loc" class="col-sm-4 control-label">Current Location:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="current_loc" value="<?php echo $tracking_info[0]['current_loc']; ?>" placeholder="Enter current location here...">
					</div>
				</div>	
				<div class="form-group">
					<label for="comment" class="col-sm-4 control-label">Comment:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="comment" value="<?php echo $tracking_info[0]['comment']; ?>" placeholder="Enter comment here...">
					</div>
				</div>
				<div class="form-group">
					<label for="comment2" class="col-sm-4 control-label">Comment 2:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="comment2" value="<?php echo $tracking_info[0]['comment2']; ?>" placeholder="Enter comment here...">
					</div>
				</div>
				<div class="form-group">
					<label for="comment3" class="col-sm-4 control-label">Comment 3:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="comment3" value="<?php echo $tracking_info[0]['comment3']; ?>" placeholder="Enter comment here...">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<input type="submit" class="btn btn-primary" name="submit" value="SAVE">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
<?php include 'footer.php'; ?>