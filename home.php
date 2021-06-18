<?php include('common/connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>enest</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
		<script>
			var i=1;
			$
			(
				function()
				{
					$('.img1').css('display','block')
					setInterval('show()',2500);
				}
				)
			function show()
			{
                $('.img'+i).fadeOut(1000)
				i=i+1;
				if(i==5)
				{
					i=1;
				}
				$('.img'+i).fadeIn(1000)	
			}
			</script>
</head>
<link rel="stylesheet" type="text/css" href="style.css">               
<body>
	<?php include('common/header.php'); ?>
	<div class="maincontainer6">
		<div class="innercontainer6">
			<div class="main">
			<img class="img1" src="images\ss.jpg"/>
			<img class="img2" src="images\cm.jpg"/>
			<img class="img3" src="images\tt.jpg"/>
			<img class="img4" src="images\cc.jpg"/>
		</div>
	</div>
</div>
   <div class="maincontainer7">
			<div class="innercontainer7">
				<?php include('common/nav.php'); ?>
				<div class="contact">
					<h1>FEATURED PRODUCTS</h1>
					<div class="cntct">
						<?php
						//$id=$_GET['id'];
					  $query="select id ,productimage,productname,productprice from product";	
				     $result=mysqli_query($connect,$query);	
				     while($row=mysqli_fetch_assoc($result))
				     {
				     	?>
					   <a href="product.php?id=<?php echo $row['id']?>"><div class="bx1" style="margin-left: 2px;cursor: pointer; text-decoration: none;">			
						<img src="/admin/<?php echo $row['productimage']?>"><br/><br/>
                        <b><?php echo $row['productname']?></b><br/>
                        <span><?php echo $row['productprice']?></span>
                        <hr style="width: 300px;">
                        <img src="images\cart.jpg"></a>
                        <a href="buynow.php?id=<?php echo $row['id']?>"><button>Add to Cart</button></a>
                    </div>
                       <?php
                   }
                   ?>
							
					</div>
				</div>
			</div>
		</div>
	<?php include('common/footer.php'); ?>
					

</body>
</html>