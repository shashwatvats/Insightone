<?php
//$connect=mysqli_connect("csi.crq0gw48mcqg.us-east-2.rds.amazonaws.com","csi999","xhxh44xh","insightone");
$connect=mysqli_connect("localhost","root","","insightone");

if (!$connect) {
	# code...
	die("Connection failed:".mysqli_error());
}
?>