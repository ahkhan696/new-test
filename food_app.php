<!DOCTYPE html>
<html>
<head>
	<title>Food App</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
	<style type="text/css">
		#main{
			height: 500px;
		}
		h1 {
			text-align: center;
		}
		#menu{
			float: left;
			width: 33%;
			height: 100%;
			border: solid 1px red;
			padding: 5px;
		}
		#customer{
			float: left;
			width: 25%;
			height: 100%;
			border: solid 1px green;
		}
		#bill{
			float: left;
			width: 41%;
			height: 100%;
			border: solid 1px blue;
			padding: 5px;
		}
		td, th{
			text-align: center;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript" src="chicken.js"></script>
	<script type="text/javascript" src="beaf.js"></script>
	<script type="text/javascript" src="mutton.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#customer_name").keyup(function(){
				var value = $(this).val();
				$("#name").text(value);
			});
			$("#customer_address").keyup(function(){
				var value = $(this).val();
				$("#add").text(value);
			});
			$("#customer_phone").keyup(function(){
				var value = $(this).val();
				$("#cell").text(value);
			});
			
			$("#print_bill").click(function(){
				$("#print_alert").html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Order submitted...!</div>');
			});
			
		});
	</script>
</head>
<body>
	<h1>Food Application</h1>
	<div id="main">
		<div id="menu">
		<center><h4>Menu</h4></center>
			<table class="table" border="1">
				<tr>
					<th>Item</th>
					<th>Price</th>
					<th>Order</th>
				</tr>
				<tr>
					<td>Chicken Karhai</td>
					<td>700/=</td>
					<td><button class="btn btn-success" id="ck">Order</button></td>
				</tr>
				<tr>
					<td>Beaf Karhai</td>
					<td>900/=</td>
					<td><button class="btn btn-success" id="bk">Order</button></td>
				</tr>
				<tr>
					<td>Mutton Karhai</td>
					<td>1100/=</td>
					<td><button class="btn btn-success" id="mk">Order</button></td>
				</tr>
			</table>
		</div>
		<div id="customer">
			<center><h4>Customer Detail</h4>
						<form class="form-inline">
							<fieldset>
									<div class="control-group">
										<div class="controls">
											<label class="control-label">Name: </label>
											<br />
											<input type="text" ref="customer_name" id="customer_name" ng-model="cname" />
										</div>
									</div>

									<br />
									<div class="control-group">
										<div class="controls">
											<label class="control-label">Address: </label>
											<br />
											<textarea ref="customer_address" id="customer_address" rows="08" cols="20" ng-model="cadd"></textarea>
										</div>
									</div>

									<br />
									<div class="control-group">
										<div class="controls">
											<label class="control-label">Phone Number: </label>
											<br />
											<input type="text" ref="customer_phone" id="customer_phone" ng-model="ccell" />
										</div>
									</div>
									
								</fieldset>
							</form>
			</center>
		</div>
		<div id="bill">
		<center><h4>Bill Detail</h4></center>
			<label>Name: </label><span id="name"></span><br />
			<label>Address: </label><span id="add"></span><br />
			<label>Cell: </label><span id="cell"></span><br />
			<div>
				<table class="table" id="order_table">
					<thead>
						<tr id="heading">
							<th>Item</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Cencel Order</th>
						</tr>
					</thead>
				</table>
			</div>
			<label>Total Price:</label><span id="tp" style="margin-left:250px;">0</span><span>/=</span>
			<br><button class="btn btn-info" id="print_bill" style="float:right;">Print Bill</button><br><br><br>
			<div id="print_alert"></div>
		</div>

	</div>
</body>
</html>