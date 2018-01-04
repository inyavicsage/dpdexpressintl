<?php
	require 'funcs.php';
	include 'header.php';

	if (!isset($_GET['SN'])) {
		header('Location: index.php?msg=Err1: An error occured. Please try again later.');
		exit();
	}

	$record = get_record($_GET['SN']);
?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="well well-sm">
			<h2 align="center">UPDATE RECORD</h2>
			<form class="form-horizontal" method="post" action="update_action.php">
				<input type="hidden" name="SN" value="<?php echo $_GET['SN']; ?>">
				<div class="form-group">
					<label for="cust_name" class="col-sm-4 control-label">CUSTOMER'S NAME (CN):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cust_name" value="<?php echo $record['cust_name']; ?>" placeholder="Enter the customer's name here...">
					</div>
				</div>
				<div class="form-group">
					<label for="cust_addr" class="col-sm-4 control-label">CUSTOMER'S ADDRESS (CA):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cust_addr" value="<?php echo $record['cust_addr']; ?>" placeholder="Enter the customer's address here...">
					</div>
				</div>
				<div class="form-group">
					<label for="cust_phone_num" class="col-sm-4 control-label">CUSTOMER'S PHONE NUMBER (CPN):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cust_phone_num" value="<?php echo $record['cust_phone_num']; ?>" placeholder="Enter the customer's phone number here...">
					</div>
				</div>
				<div class="form-group">
					<label for="item_bought" class="col-sm-4 control-label">ITEM BOUGHT (IB):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="item_bought" value="<?php echo $record['item_bought']; ?>" placeholder="Enter the item bought here...">
					</div>
				</div>
				<div class="form-group">
					<label for="item_sold" class="col-sm-4 control-label">ITEM SOLD (IS):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="item_sold" value="<?php echo $record['item_sold']; ?>" placeholder="Enter the item sold here...">
					</div>
				</div>
				<div class="form-group">
					<label for="unit_price" class="col-sm-4 control-label">UNIT PRICE (UP):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="unit_price" value="<?php echo $record['unit_price']; ?>" placeholder="Enter the unit price here...">
					</div>
				</div>
				<div class="form-group">
					<label for="total_amt" class="col-sm-4 control-label">TOTAL AMOUNT (TA):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="total_amt" value="<?php echo $record['total_amt']; ?>" placeholder="Enter the total amount here...">
					</div>
				</div>
				<div class="form-group">
					<label for="total_expen" class="col-sm-4 control-label">TOTAL EXPENDITURE (TE):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="total_expen" value="<?php echo $record['total_expen']; ?>" placeholder="Enter the total expenditure here...">
					</div>
				</div>
				<div class="form-group">
					<label for="date" class="col-sm-4 control-label">DATE (D):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="date" value="<?php echo $record['date']; ?>" placeholder="Enter the date here...">
					</div>
				</div>
				<div class="form-group">
					<label for="qty" class="col-sm-4 control-label">QUANTITY (Q):</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="qty" value="<?php echo $record['qty']; ?>" placeholder="Enter the quantity here...">
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