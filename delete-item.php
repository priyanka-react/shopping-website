<?php include('common/connection.php'); ?>
<?php
$stu_Id=$_GET['id'];

$sql="delete from cart where id={$stu_Id}";
$result=mysqli_query($connect,$sql)or die("Query unsuccesfull");

header("Location:http://localhost/enest/checkout.php");

mysql_close($connect);

?>
