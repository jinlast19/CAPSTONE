<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type:application/json");
$con = mysqli_connect("localhost", "rojinx10_rojin" ,"Aa1234567" , "rojinx10_interrapp");

$res = mysqli_query($con,"SELECT * FROM accounts");
while($data=mysqli_fetch_assoc($res)){
	$info[] = $data;
}
echo json_encode($info);
?>