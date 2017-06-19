<?php
$conn = new mysqli("localhost","enigma","enigma","db_enigma");
if(!$conn){echo '<script>alert("Cant Connect To server ");</script>';}
    if(isset($_POST['register'])) {
        $int = mysqli_real_escape_string($conn, $_POST['int']);
        $c1 = mysqli_real_escape_string($conn, $_POST['c1']);
        $c2 = mysqli_real_escape_string($conn, $_POST['c2']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mob = mysqli_real_escape_string($conn, $_POST['mob']);

        /*Search */

        $search = "SELECT `mail` FROM `users` WHERE `mail` ='$email'";

        if ($conn->query($search)->num_rows> 0) {
            echo '<script>alert("Email Already Registered ")</script>';
        }else {
            $sql = "INSERT INTO `users` VALUES ('$int','$c1','$c2','$email','$mob','n','n','00:00:00','00:00:00')";
            $q2 = $conn->query($sql);
            if ($q2){
                session_start();
                $_SESSION["userEmail"] = $email;
                header('location:../user/welcome.php');
            } else {echo "ERR";}
        }
    }
?>
        <!-- registration Closed  -->
<!doctype html>
<html lang="en">
<head>
<title>Nakshatra Events  - ENIGMA</title>
<link href="http://fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="../assets/js/jquery.min.js"></script>
<!-- /css -->
<style type="text/css">
    body{
        background-image: url(../images/12.jpg);
    }
	#form-content{color:white;background-color: rgba(255, 5, 0, 0.3);
		font-size:22px;}

    .back{
        margin-left: auto;
        margin-right: auto;
        font-size:32px;float:left;color:white;text-decoration: underline; 	
    }
</style>
</head>
<body>
<h1 class="header-agileits w3layouts w3 w3l w3ls">ENIGMA Registration  Form</h1>
<div class="content-w3ls agileits agileinfo wthree">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="reg-form">

        <label class="header">Institute Name </label>

        <input type="text" id="iname" name="int" placeholder="institute name " title="Please enter Your Institute Name " required="required" pattern="[a-zA-Z ]{4,200}">

        <br/><br/>

        <div class="form-control2">
            <label class="header">Participants 1 </label>
            <input type="text" id="email" name="c1" placeholder="Participants 1" title="1st participents name " required="required" pattern="[a-zA-Z ]{3,50}">
        </div>

        <div class="form-control2">
            <label class="header">Participants 2 </label>
            <input type="text" id="email" name="c2" placeholder="Participants 2 " title="2 nd pasrticipant name " required="required" pattern="[a-zA-Z ]{3,50}">
        </div>

        <div class="form-control2">
            <label class="header">Email Address </label>
            <input type="email" id="email" name="email" placeholder="Enter Email" title="Please enter a Valid Email Address" required="required">
        </div>

        <div class="form-control2">
            <label class="header">Mobile Number  </label>
            <input type="text" id="email" name="mob" placeholder="Enter Mobile Number " title="Please enter a Valid Contact Number " required="required" pattern="[789]\d{9}">
        </div>


		<div class="clear"></div>
		<br/>
		<div class="form-control last">
			<input type="submit" class="register" id="register" name="register" value="Register Now ->">
			<input type="reset" class="reset" value="Reset"><br/>
			<br/>
			<div class="clear"></div>
			<br/>
			<div ><h1 align="center" id="form-content"></h1></div><br/>
			<a href="../index.php" class="back">Back to home </a><br/>
			
			<div class="clear"></div>
		</div>	
	</form>
            
</div>
<p class="copyright w3layouts w3 w3l w3ls" style="background-color:rgba(74,68,68,0.85);">&copy;2017 Nakshatra Events | Design by <a href="https://nakshatra2k17.com/" target="_blank">NAKSHATRA EVENT TEAM</a></p>

<script>
</body>
</html>