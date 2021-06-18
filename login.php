<?php include('common/connection.php');
session_start();

if(isset($_SESSION['email'])){
  header("Location:http://localhost/enest/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>enest</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="maincontainer">
		<div class="innercontainer">
			<div class="enest">
            <h1>ENEST</h1>
            <p>THE BIGGEST CHOICE ON THE WEB</p>
        </div>
        <div class="login">
        	<a href="http://localhost/enest/login.php"><h4>Log in<h4></a>
        </div>
    </div>
</div>
	<?php
    if(!empty($_GET['log']))
			   {
				$ma1=$_GET['em1'];
				$pas1=$_GET['pa1'];
				$query="select * from signup where email='$ma1' and password='$pas1'";
				$result=mysqli_query($connect,$query);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					
					while($row=mysqli_fetch_assoc($result)){
						session_start();
						$_SESSION['email']=$row['email'];
						$_SESSION['user_id']=$row['id'];
						$_SESSION['fullname']=$row['fullname'];
						
					header("Location:http://localhost/enest/home.php");
				}
				}
				else
				{

					echo "Login Unsuccessfull";
				}
			  }
			?>
		
		<div class="maincontainer2">
			<div class="innercontainer2">
				<div class="box2">
					<div class="user">
					<h3 class="hh">Login Here</h3><br/>
					<form>
					 <table class="mob">
					<tr>
						<td>Email</td>
						<td><input type="text" name="em1" required></td>
					</tr><br/>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pa1" required></td>
					</tr>
				</table>
				<input type="submit" class="btnn" value="Login" name="log">
			</form>
				</div>

			</div>
			<?php
            if(!empty($_GET['save']))
			   {

				$na=$_GET['fn'];
				$ma=$_GET['em'];
				$pa=$_GET['pass'];
				$query="insert into signup (fullname,email,password) values('$na','$ma','$pa')";
				if(mysqli_query($connect,$query))
				{

					header("Location:http://localhost/enest/home.php");
				}
				else
				{

					echo "Registration Unsuccessfull";
				}
			  }
			?>
			<div class="box3">
				<div class="user1">
				<h3>New to ENEST? sign up</h3><br/>
				<form>
				<table class="mob1">
					<tr>
						<td>Full Name</td>
						<td><input type="text" name="fn" required></td>
					</tr><br/>
					<tr>
						<td>Email</td>
						<td><input type="text" name="em" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass" required></td>
					</tr>
				</table>
				<input type="submit" class="btnn" value="Signup" name="save">
			</form>
			</div>
		</div>
	</div>
</div>
            <?php include('common/footer.php'); ?>
	</body>
	</html>