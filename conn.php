<?php

	header("content-type:text/html; charset=utf-8");
	#$conn = mysqli_connect("localhost","root","","jayoungleetate");
	#$conn = mysqli_connect("localhost","root","","inboard");
	$conn = mysqli_connect("db.jayremind.co.kr","jayremind","jay1q2w3e!!","dbjayremind");
	if($conn-> connect_error ){
		echo $conn-> connect_errorno;
		exit;
	}
	$conn->set_charset("utf8");


?>