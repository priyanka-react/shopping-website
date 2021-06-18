                          
<?php include('common/connection.php');?>
                          <?php
							//$id=['id'];
								 if(isset($_POST['chk']))
			   					{

								$id=$_POST['id'];
								$ma=$_POST['quantity'];
								echo $query="insert into cart (productid,quantity,) values('$id','$ma')";
								if(mysqli_query($connect,$query))
								{

								echo "Registration Succesfull";
								}
								else
								{

								echo "Registration Unsuccessfull";
								}
							}

								?>
								