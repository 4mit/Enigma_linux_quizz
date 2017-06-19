<?php
$conn = new mysqli("localhost","enigma","enigma","db_enigma");
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&nbsp;enigma online </title>
    <meta name="author" content="aniket amit ">

    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>

    <style>
        .nav li{
            border:1px dashed white;background-color:#0a3546;color:white; transition:.3s ease-in;
            font-size:22px;
        }
        .nav li:hover{
            background-color:#0CBDF3; color:red; font-weight:bold !important;
        }
        span.fa.fa-bars{background-color:black;}

        select option {
            color:#000000 !important;

        }
    </style>

</head>
<body>

<!-- loader-->

<!-- -->
<div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> <!--- Off Canvas Side Menu -->
    <div class="close" data-toggle="offcanvas" data-target=".navmenu">
        <span class="fa fa-close"></span>
    </div>
    <br/><br/>
    <ul class="nav navmenu-nav"> <!--- Menu -->
        <li style="background-color:red;"><a href="logout.php" style="font-size: larger;"><i class="fa fa-times" aria-hidden="true"></i>Quit</a></li>
        <?php
        $qid = 1;
        for($i=1;$i<=25;$i++){
            echo '<li><a href="welcome.php#q'.$qid.'"class="page-scroll">Question'.$i.'</a></li>';
            $qid++;
        }
        ?>
    </ul>
</div>


<div id="home">
    <div class="container text-center">

        <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-bars"></span>
        </nav>
        <div class="pull-right" id="clock"
             style="color:red;
             position:fixed;
             font-size:25px;
             font-weight:bold;
             margin-left:60%;">

        </div>

        <div class="content">

            <h1 align="center" style="background-color: rgba(15, 131, 156, 0.3); ">
                Welcome : <?php echo  $_SESSION["userEmail"];?>
            </h1>
            <h4 style="background-color:rgba(15, 131, 156, 0.3); color:red; font-size:24px; font-weight:bold;">Click the Arrow below to start Answering </h4>
            <hr>
        </div>

        <a href="#clients" class="down-btn page-scroll">
            <span class="fa fa-angle-down"></span>
        </a>


    </div>
</div>

<div id="clients">
    <div class="overlay">
        <div class="container text-center">
            <div class="section-title">
                <h3>QUESTION SECTION </h3>
            </div>
            <div class="row" id="display_question">
                <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12" style="color:white;">
                    <?php include('function.php');	?>
                    <div id="new_question"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<nav id="footer">
    <div class="container">
        <div class="pull-left">
            <p>2017 © Online Event team . All Rights Reserved. & Designed by <a>Nakshtra Team</a></p>
        </div>
        <div class="pull-right">
            <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
        </div>
    </div>
</nav>


<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/owl.carousel.js"></script>

<script>
    $(document).ready(function()
    {
        $('.cssload-container').delay(2500).fadeOut('slow');
        
        $('[data-toggle="tooltip"]').tooltip();
        
        $('#logout_after_lock').hide();
        
        $('#show_question_btn').click(function(){
            $('#show_question_btn').hide();
            $('.question_section').show();
        });
    });

    $('#start_event').click(function(e){
        e.preventDefault();
        $('#start_event').hide('fast');
        datastring = "started="+"yes";
        $.ajax({
            url:'start_user_session.php',
            type:"POST",
            cache:false,
            data:datastring,
            success: function(data){
                
                $('#new_question').html(data);
                window.location='welcome.php';
            },
            error: function(data){
                alert('ERRORR START EVENT ');
            }
        });
    });


    $('button').click(function(){
        var x = $(this).prev().val();
	$(this).prev().hide();	
	$(this).fadeOut("fast");
        var t = $(this).prev().attr('id');
        dataToBeSent = "qid="+t+"&value="+x;
        $.ajax({
            url:'start_user_session.php',
            type:"POST",
            cache:false,
            data:dataToBeSent,
            success: function(data)
            {
                var remainingTime = Math.floor(45-(data/60));
		var msg =remainingTime+"-Minutes Left";
                $('#clock').html(msg);

                if(data>=2700) {
                    alert('YOUR SESSION HAS BEEN EXPIRED ');
                    window.location = 'logout.php';
                }
            },
            error: function(data){
                alert('ERRORR START EVENT ');
            }
        });
    });

    $('#lock_answer').click(function(e){
        $('#options').hide();
        isLocked= "locked="+"yes";
        $.ajax({
            url:'start_user_session.php',
            type:"POST",
            cache:false,
            data:isLocked,
            success: function(data){
                console.log('Lock Ansswers  Clicked and success ');
                console.log(data);
                $('#logout_after_lock').show().slideDown();
            },
            error: function(data){
                alert('ERRORR IN LOCKING ANSWER');
            }
        });
    });
</script>
</body>
</html>
