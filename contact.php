<?php include('common/connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>enest</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<?php include('common/header.php'); ?>
		
	<div class="maincontainer3">
			<div class="innercontainer3">
				<?php include('common/nav.php'); ?>
				<?php
		            if(!empty($_GET['send']))
					   {

						$na=$_GET['fn'];
						$ma=$_GET['em'];
						$msg=$_GET['ms'];
						$query="insert into contact (fullname,emailaddress,message) values('$na','$ma','$msg')";
						if(mysqli_query($connect,$query))
						{

							echo "Send succesfully";
						}
						else
						{

							echo "Sending Unsuccessfull";
						}
					  }
					?>
				<div class="contact">
					<h1>CONTACT US</h1>
					<div class="service">
						<p>Customer Service 91 8528598959<br/>Ludhiana Punjab.INDIA<br/>Yorex Infotech</p>
				        <hr>
				        <p>Contact Us<br/>Have a question?We have 24x7 customer service.<br/>Before you contact us,skim through our Self Serve options and frequently asked Questions for quicker answers.<br/>Want to know more about the status of your orders?<br/>Login to view your order details</p>
				        <div class="container">
				        	<button>Contact us</button>
				        	<span>*Required information</span>
				        	<form>
				        	<table class="tbl">
					<tr>
						<td>Full Name:*</td>
						<td><input type="text" name="fn" required></td>
					</tr><br/>
					<tr>
						<td>Email Address:*</td>
						<td><input type="text" name="em" required></td>
					</tr>
					<tr>
						<td>Message:*</td>
						<td><textarea cols="44"rows="10" name="ms" required></textarea></td>
					</tr>
				</table></div>
				<input type="submit" name="send" class="bb" value="Send Now">
			</form>
			</div>
		</div>
	</div>
</div>
               <?php include('common/footer.php'); ?>
			</body>
</html>