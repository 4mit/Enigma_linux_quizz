<?php

$conn = new mysqli("localhost","enigma","enigma","db_enigma");
	echo '<script>console.log("functio.phhp included")</script>';	           
	
	$checkIfStarted = "SELECT `submitted` FROM `users` WHERE `submitted` ='y' AND `mail` ='".$_SESSION['userEmail']."'";
	if($conn->query($checkIfStarted)->num_rows>0)
	{
		$checkIfLocked = "SELECT `locked` FROM `users` WHERE `locked` ='y' AND `mail` ='".$_SESSION['userEmail']."'";
		if($conn->query($checkIfLocked)->num_rows>0)
		{
			echo '<h2>:( You Have Locked Your Choices You Cant Continue ):</h2><hr/>';
			echo '<a href="logout.php" class="btn btn-danger">Exit Now </a>';
			
		}else{
			echo '<h2>Start Submission Now ...</h2><hr/>';
			include('showQuestion.php');
			echo '<a href="logout.php" id="lock_answer" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Be Carefull There is no chance after locking answeers You can submit it once ">Lock My Answers</a>';			
		}
	}
	else{
		echo '<button type="button" id="start_event" class="btn btn-info">Start Submission Now </button>';
	}                  
?>