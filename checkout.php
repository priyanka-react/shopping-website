<?php include('common/connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>enest</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php include('common/header.php'); ?>
   
	<div class="maincontainer4">
			<div class="innercontainer4">
				<?php include('common/nav.php'); ?>
				<div class="contact">
					
					<h1>ORDER DETAILS</h1>
					<div class="dish00" style="width: 975px;height: auto;">
						<table border="2" style=" border-collapse: collapse; width: 100%;text-align: center;">
	<tr>
		<th>USER ID</th>
		<th>USER NAME</th>
		<th>PRODUCT ID</th>
		<th>PRODUCT NAME</th>
		<th>PRODUCT PRICE</th>
		<th>QUANTITY</th>
		<th>SUBTOTAL</th>
		<th>REMOVE ITEM</th>

	</tr>
	<?php 
	$gtotal=0;
	$user= $_SESSION['fullname'];
	//print_r($user);
			$query="select * from cart where username='$user'";
		$result=mysqli_query($connect,$query);	
		while($row=mysqli_fetch_assoc($result))
		{
			?>
				<tr>
					<td><?php echo $row['userid']?></td>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['productid']?></td>
					<td><?php echo $row['productname']?></td>
					<td><?php echo $row['productprice']?></td>
					<td><?php echo $row['quantity']?></td>
					<td><?php echo $row['productprice'] * $row['quantity']?></td>
					<?php  $gtotal = $gtotal + ($row['productprice'] * $row['quantity'])?>
					<td><a href="delete-item.php?id=<?php echo $row['id']?>">Remove</td>

				</tr>
			<?php
		}	
	?>
	<tr>
		<td colspan="6">GRAND TOTAL</td>
		<td><?php echo $gtotal;?></td>
	</tr>
</table>

					
				
			</div>
		</div>
                  <?php include('common/footer.php'); ?>
				</body>
			</html>