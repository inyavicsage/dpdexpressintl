<?php
	session_start();
	require 'funcs.php';
	require_login();
	include 'header.php';
?>
<div class="row">
	<div class="col-md-12">
		<h2 align="center">Tracking Infos</h2>
		<table class="table table-bordered">
			<?php if (isset($_GET['msg'])): ?>
				<div align="center" class="alert alert-info" role="alert"><?php echo $_GET['msg']; ?></div>
			<?php endif; ?>
			<div class="clearfix"><p class="pull-right"><a class="btn btn-primary" href="add.php">ADD</a></p></div>
			<thead>
				<th>SN</th>
				<th>Tracking No</th>
				<th>Shipper Name</th>
				<th>Shipper Phone</th>
				<th>Shipper Address</th>
				<th>Receiver Name</th>
				<th>Receiver Phone</th>
				<th>Consignment No</th>
				<th>Ship Type</th>
				<th>Weight</th>
				<th>Invoice No</th>
				<th>Booking Mode</th>
				<th>Total Freight</th>
				<th>Mode</th>
				<th>Pickup Date/Time</th>
				<th>Estimated Time of Arrival</th>
				<th>Status</th>
				<th>Current Location</th>
				<th>Comment</th>
				<th>Comment 2</th>
				<th>Comment 3</th>
			</thead>
			<tbody>
				<?php foreach (get_tracking_infos() as $tracking_info): ?>
				 	<tr>
				 		<?php foreach ($tracking_info as $field): ?>
				 			<td><?php echo $field; ?></td>
				 		<?php endforeach ?>
				 		<td>
				 			<a href="update.php?tracking-no=<?php echo $tracking_info['tracking_no']; ?>">UPDATE</a>
				 			<a href="remove.php?tracking-no=<?php echo $tracking_info['tracking_no']; ?>">REMOVE</a>
				 		</td>
				 	</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<button class="btn btn-primary" onclick="myFunction()">PRINT</button>
	</div>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
<?php include 'footer.php'; ?>