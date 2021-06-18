<?php include('common/connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>enest</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<?php include('common/header.php'); ?>
	<div class="maincontainer5">
			<div class="innercontainer5">
				<?php include('common/nav.php'); ?>
				<div class="contact">
					<h1>ALL PRODUCTS</h1>
				</div><br>
					<div class="contact1">
						<table>
					<tr>
						<td><b>Sort by:</b></td>
						<td><select><option>Product Name</option>
							<option>Dishwasher</option>
							<option>Dishwasher</option>
						    <option>Dishwasher</option></select></td>
						</tr></table>
					</div>
					<div class="contact2">
						<span>Displaying 1 to 5 (of 6 new products)</span>
						<button>Previous</button>
						<button>Next</button>
						<?php 	
							$query="select * from product where special= 1 order by id desc";
									
						     $result=mysqli_query($connect,$query);	
						     while($row=mysqli_fetch_assoc($result))
						{
							?>
						
						<div class="dish1">
							<div class="pic1">
								<img src="/admin/<?php echo $row['productimage']?>"><br/><br/><br/><br/>
								<button><b>In Stock: <?php echo $row['productquantity']?></b></button>
							     </div>
							     <div class="model1">
							     	Date Added 2013-06-01 08.05.32<br/><br/><hr>
									<h2><?php echo $row['productname']?></h2>
									<h4>Model <?php echo $row['productname']?><br/>Manufacturer <?php echo $row['productname']?> </h4><br/><br/><br/><br/><br/><br/><br/>
									<b>Rs.<?php echo $row['productprice']?></b><br/><br/>
									<a href="buynow.php?id=<?php echo $row['id']?>"><button >Buy Now</button></a>
								</div>
						</div>
						<?php } ?>
						<div class="contact3">
						<span>Displaying 1 to 5 (of 6 new products)</span>
						<button>Previous</button>
						<button>Next</button>
					</div>
				</div>
			</div>
		</div>
		      <?php //include('common/footer.php'); ?>
</body>
</html>