<?php

$mysqli_hostname= "db.jayremind.co.kr";

$mysqli_username = "jayremind";

$mysqli_password="jay1q2w3e!!";

$mysqli_database="dbjayremind";

$mysqli_port = "3306";

$mysqli_charset="utf8";



$connect = new mysqli($mysqli_hostname,$mysqli_username,$mysqli_password,$mysqli_database,$mysqli_port);


if($connect->connect_errno){
	echo "[연결실패]".$connect->connect_error."";
}else{
	echo "<span style='font-size:45px;margin-top:15%;width:100%;text-align:center;font-weight:bold;color:red;'>[연결성공]"."<script>location.href='/kinloch/index.php'</script>";
}


$sql = "
    INSERT INTO kinloch
            SET `name` = '{$_POST['name']}',
                `mobile_no1` = '{$_POST['mobile_no1']}',
                `mobile_no2` = '{$_POST['mobile_no2']}',
                `mobile_no3` = '{$_POST['mobile_no3']}',
                `f2_email1` = '{$_POST['f2_email1']}',
                `f2_email2` = '{$_POST['f2_email2']}',
                `fname` = '{$_POST['fname']}'";
$connect->query($sql);


?>


