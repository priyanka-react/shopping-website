<?php
include('common/connection.php');

session_start();

session_unset();

session_destroy();

header("Location:http://localhost/enest/login.php");



?>