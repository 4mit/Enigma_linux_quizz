<?php
session_start();
ERROR_REPORTING(E_ALL);

$conn = new mysqli("localhost","enigma","enigma","db_enigma");
if(isset($_POST['started']))
{

	$queryy = "UPDATE `users` SET `submitted` = 'y' WHERE `users`.`mail` = '".$_SESSION['userEmail']."'";
	if(!$conn->query($queryy)){
		echo '<script>alert("STARTED QUERY NOT UPDATES  ..");</script>';

	}else{

		$now = time();
		$ET  = $now+(45*60);
		$startDate = date('H:i:s', $now);
		$endTime = date('H:i:s',$ET);


		$saveStartTime  = "UPDATE `users` SET `starting_time` ='".$startDate."' WHERE `mail`='".$_SESSION['userEmail']."'";
		//$saveStartTime = "UPDATE `users` SET `starting_time` = '".$startTime."' WHERE `users`.`mail` = '".$_SESSION['userEmail']."'";

		$conn->query($saveStartTime);

		$saveEndTime = "UPDATE `users` SET `plus1hour` = '".$endTime."' WHERE `users`.`mail` = '".$_SESSION['userEmail']."'";
		$conn->query($saveEndTime);

		//include('showQuestion.php');
	}
}

if(isset($_POST['locked']))
{
	$start_staus  = $_POST['locked'];
	$now = time();
	$endDate = date('H:i:s', $now);
	$queryy = "UPDATE `users` SET `locked` = 'y', `lockedDateTime` = '".$endDate."' WHERE `users`.`email` = '".$_SESSION['userEmail']."'";
	$conn->query($queryy);
	echo 'status locked ';
}


if(isset($_POST['qid']) && isset($_POST['value']))
{
	$qsid  = $_POST['qid'];
	$answ  = $_POST['value'];
	$now = time();
	$startTime = date('H:i:s', $now);
	$insertAns = "insert into `ans` values('$qsid','".$_SESSION['userEmail']."','$answ','$startTime')";
	$conn->query($insertAns);

	$getTime = "SELECT `starting_time` FROM `users` WHERE `mail`='".$_SESSION['userEmail']."'";
	$timeQuery = $conn->query($getTime);
	$ss=0;
	if($timeQuery->num_rows>0){
		while($r = $timeQuery->fetch_assoc()){
			$ss= $r['starting_time'];
		}
	}
	$diff =strtotime($startTime)-strtotime($ss);
	echo $diff;
}
?>