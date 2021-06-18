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
					<?php
						    $id=$_GET['id'];

							 $query="select * from product where id = $id";							
						    $result=mysqli_query($connect,$query) or die('connection failed');
						     if (mysqli_num_rows($result) > 0) {
						     while( $row = mysqli_fetch_assoc($result)) 

						{
							?>
					<h1><?php echo $row['productname']?></h1>
					<div class="dish">
						<div class="pic">
							<img src="/admin/<?php echo $row['productimage']?>">
							<button class="bb1"><b>In Stock <?php echo $row['productquantity']?></b></button><br/><br/><br/><br/><br/><br/>
							<b>Details:</b><br/><br/>
							<?php echo $row['productname']?>
						     </div>
							<div class="model">
								<h2><?php echo $row['productname']?></h2>
								<h4>Model <?php echo $row['productname']?><br/>Manufacturer <?php echo $row['productname']?></h4><br/><br/><br/><br/><br/>
								<?php
							$id= $_GET['id'];

							
							if(isset($_SESSION['user_id'])){
								$cmd=$_SESSION['user_id'];
							}
							if(isset($_SESSION['fullname'])){
								$jmd=$_SESSION['fullname'];
							}
							
							

								 if(isset($_POST['chk']))
			   					{
			   						$id = $_GET['id'];		
								 	$fetch= "SELECT * from product where id = $id";
								 	$res= mysqli_query($connect, $fetch);
								 	$row1 = mysqli_fetch_assoc($res)or die("Failed");
								 	$cj = $row1['productname'];
								 	$cji=$row1['productprice'];

								//$id=$_POST['id'];
									$ma=$_POST['quantity'];
								  $query="insert into cart (userid,username,productid,productname,productprice,quantity) values('$cmd','$jmd','$id','$cj','$cji','$ma')";
								if(mysqli_query($connect,$query))
								{

								echo "product added to the Cart";
								}
								else
								{

								echo "product is not added to the Cart";
								}
							}

								?>
								<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
								<table>
					             <tr>
						           <td>Enter quantity</td>
						             <td><input type="text" name="quantity"></td>
					                    </tr>
					                     </table>
					                     <span>Rs.<?php echo $row['productprice']?></span><br/><br/>
					                     <button type="submit" name="chk">Add to Cart</button><br/><br/>
					                 </form>
					                     <a href="checkout.php"><button >Check Out</button></a>
					                 </div>
					             </div>
					         <?php } }?>

						             <?php/*
				                   if(!empty($_GET['save']))
							      {

								   $na=$_GET['en'];
								   $ma=$_GET['em'];
								   $pa=$_GET['er'];
								   $ra=$_GET['rr'];
								   $query="insert into query (name,email,review,rating) values('$na','$ma','$pa','$ra')";
								  if(mysqli_query($connect,$query))
								  {

									echo "Query Submitted";
								  }
								  else
								 {

									echo "Query Submission Unsuccessfull";
								 }
							   }*/
							 ?>
					           <div class="info">
					           	<form action="query.php" method="get">
					           	<table class="tt">
					<tr>
						<td><b>Enter Name</b></td>
						<td><input type="text" name="en"  ></td>
					</tr><br/>
					<tr>
						<td><b>Enter Email</b></td>
						<td><input type="text" name="em" ></td>
					</tr>
					<tr>
						<td><b>Enter Review</b></td>
						<td><textarea cols="22"rows="15" name="er"></textarea></td>
					</tr>
					<tr>
						<td><b>Rating</b></td>
						<td><input type="text" name="rr" min="1" max="5" ></td>
					</tr>
				</table>
				<input type="submit" class="" name="save" value="Submit Query">

				<?php 		
				$query="select rating from query";
				$result=mysqli_query($connect,$query);	
				while($row=mysqli_fetch_assoc($result))
				{
					?>
						<tr>
							<td><?php echo $row['rating'].","?></td>
						</tr>
					<?php
				}	
			?>
			</form>
			</div>
		</div>
	</div>
</div>
                  <?php include('common/footer.php'); ?>
				</body>
			</html>