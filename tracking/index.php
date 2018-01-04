<?php
	include 'header.php';
	require 'funcs.php';
?>
<div class="row">
	<div class="col-md-12">
		<h2 align="center">Tracking Info</h2>
		<table class="table table-bordered">
			<?php if (isset($_GET['msg'])): ?>
				<div align="center" class="alert alert-info" role="alert"><?php echo $_GET['msg']; ?></div>
			<?php endif; ?>
			<div class="clearfix"><a class="btn btn-primary pull-right" href="add.php">ADD</a></div>
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
				<?php foreach (get_tracking_infos() as $SN => $tracking_infos): ?>
				 	<tr>
				 		<?php foreach ($tracking_infos as $field): ?>
				 			<td><?php echo $field; ?></td>
				 		<?php endforeach ?>
				 		<td>
				 			<a href="update.php?SN=<?php echo $SN; ?>">UPDATE</a>
				 			<a href="remove.php?SN=<?php echo $SN; ?>">REMOVE</a>
				 		</td>
				 	</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<button class="btn btn-primary pull-right" onclick="myFunction()">PRINT</button>
	</div>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
<?php include 'footer.php'; ?>