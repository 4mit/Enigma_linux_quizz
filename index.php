<?php
if(isset($_GET['submitted'])){
	echo '<script>alert("YOU ARE OUT OF THE GAME .... ");</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&nbsp;ENIGMA</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <!-- Favicons
    ================================================== -->
    <link rel="icon" 
      type="image/png" 
      href="https://pbs.twimg.com/media/C2twhNFWgAA2HL1.jpg">
  
    <!-- Bootstrap -->
    <link href="user/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="user/font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="user/css/jasny-bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css"  href="user/css/style.css">
    <link rel="stylesheet" type="text/css" href="user/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="user/css/animate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="user/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="user/js/jquery.1.11.1.js"></script>

  <style>
  @import url(assets/fonts/foughtknight.ttf);
  @import url(assets/fonts/gang_wolfik.ttf);
  
	.section-title{
		font-family:foughtknight;
	}
	.content h4{font-family:foughtknight;font-size:400%;}
    .slider_row{background-color:rgba(24,24,56,0.5);}
	#meet-us{
		background-image:url(https://lh3.googleusercontent.com/-0-X3OJQiabY/V3xzPjczZhI/AAAAAAAABAU/seLwoY-G3PwAFTzA9YWMzc9M8yRH_xl1A/w1920-h1080/679140.png);
		background-position:center;
		background-size:cover;
		background-attachment:fixed;
	}
	#services{
		color:rgba(255,255,255,1.00);
		background-image:url(http://www.dreamscene.org/wallpapers/digital_rain.jpg);
		background-position:center;
		background-size:cover;
		background-attachment:fixed;
	}
	.service{
		background-color:rgba(86,70,70,0.73);
					
	}
  </style>
  </head>
  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand  tada" href="#" style="color:#FDAE03;">ENIMGA</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
          <ul class="nav navbar-nav navbar-right">
            <li class="animated bounceInLeft hvr-underline-from-center">
            	<a href="register/reg.php" id="reg_link" style="color:#FDAE03;"><i class="fa fa-paper-plane" aria-hidden="true"></i>
Register And Play </a>
            </li>
            <li class="animated bounceInLeft hvr-underline-from-center">
            	<a href="#services" style="color:#FDAE03;"><i class="fa fa-question" aria-hidden="true"></i>
Rules</a>
            </li>

              <li class="animated bounceInLeft hvr-underline-from-center">
                  <a href="#" id="show_contact" style="color:#FDAE03;"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
              </li>

            &nbsp;&nbsp;
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        <div id="home">
        <div class="container text-center">
            <div class="content">
 	     		<img src="images/MCALogo.png"
                	 class="img center-block img-circle animated bounceInDown" 
                     id="logo_img" 
                     style="height:10em;
                     		width:10em;
                            margin-top:-80px;
                            background-color:red;
                            border:1px dashed black;
                            left:-10em;
                            -webkit-box-shadow: -2px -28px 33px -9px rgba(240,152,19,1);
                            -moz-box-shadow: -2px -28px 33px -9px rgba(240,152,19,1);
                            box-shadow: -2px -28px 33px -9px rgba(240,152,19,1);">
                   
                <h4 style="color:white;
                			font-size:250%;
                            font-weight:bold;
                            
                            width:70%;
                            margin-left:auto;
                            margin-right:auto;"
                            class="animated bounceInUp hvr-float-shadow hvr-pop"
                            >ENIGMA
                </h4>
                
                 <div class="col-sm-12">
                       <p>

                       </p>
                 </div>
                
                <hr>
                
                <div class="header-text btn">
                    <h1><span id="head-title" style="color:white;"></span></h1>
                </div>
                
                <br/>
                <a href="#meet-us" class="down-btn page-scroll">
                    <span class="fa fa-angle-down"></span>
                </a>
        </div>
    </div>
    </div>

    <!-- Meet Us Section -->
    <div id="meet-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2 class=" animated tada infinite text-uppercase" style="font-size:34px;color: white;">About Contest </h2>
                        <hr>
                    </div>
                    <h1  style="font-size:24px; background-color:rgba(120,113,113,0.61);" align="center">
                        THIS IS JUST A BEGINNING ?

                    </h1>
                    <h1 style=" background-color:rgba(120,113,113,0.61);" align="center">
                        ARE YOU READY FOR IT ?

                    </h1>
                </div>
            </div>
        </div>
    </div>

     <!-- Services Section -->
    <div id="services">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2 class=" animated tada infinite text-uppercase" style="font-size:29px;">RULES</h2>
                        <hr>
                    </div>

                </div>
            </div>     
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="service">
                        <span class="fa fa-book fa-3x"></span>
                        <h4 class="">General Rules</h4>
                        
                        	<ul style="text-align: left;padding-left:20px;font-size: 27px;">
				<li style="color:red;">Plase Do not refresh page otherwise your submission will be rejected </li>
				<li>Each Question would be submitted only once</li>
				<li>There is no separate  clock shown on window please keep the count of time.</li>
				<li>Once you have finished answering you must lock answer in time. </li>
				<li>For each incorrect answer there will negavtive marking scheme of 1/2</li>
				<li>In case you are not selecting any answer 0 marks will be given for that question</li>
				<li>Once <b>SAVE MY ANSWER</b> button is clicked for each particular question you can't alter your answer for that question .</li>
                            	<li>In case of any malpractice your college will be Disqualified from the entire event.</li>
                                <li >Maximum time limit is 45 minutes.</li>
                            	<li >You are not allowed to leave the fullscreen mode or to use command-line terminal during the test.</li>
                                <li >this test consist of 30 MCQs.
 </li>                                                             
                                
                                     
                            </ul>
                        
                        </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="service">
                        <span class="fa fa-tags fa-3x"></span>
                        <h4>More Instructions </h4>
                        <p>
                        	<ul style="text-align: left;padding-left:20px;font-size: 27px;">
                            	<li >Once Registered You can enter the game by clicking  START button.</li>
                                <li >Once you have entered the game Your time will be started.</li>
                                <li >Candidate Can Not Change any information provided during registration ,'Be careful' </li>
                                <li>Once you have locked your answers you can't alter again</li>
                                                              
                            </ul>
                        </p>
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12">
                    <div class="service">
                        <span class="fa fa-tags fa-3x"></span>
                        <h4>Prizes</h4>
                        <p>
                        	<ul style="text-align: left;padding-left:20px;font-size: 27px;">
                            	
                            	<li >Winner will get a Prize of an amount 2000<i class="fa fa-inr" aria-hidden="true"></i></li>
                                <li >You will be informed in case if you are a winner.</li>
                                <li >To be eligible for the prize you have to be an MCA student of any INDIAN institute. And Your college should be registered On <a href="www.nakshatra2k17.com">NAKSHATRA Website.</a></li>
                               	<li > Winners will be felicitated at the award distribution ceremony of Nakshatra at NIT Calicut.</li>
                                <li>Please Bring Your Valid ID card to claim prize amount.</li>                                                             
                            </ul>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

  <div id="cta">
      <div class="container text-center">
          <a href="http://www.nakshatra2k17.com" class="btn go-to-btn hvr-ripple-out">Visit Nakshatra Home Page </a>
      </div>
  </div>


   
    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © Nakshtra'17</p>
		<img src="https://pbs.twimg.com/profile_images/821443324028551173/3trInUVr.jpg" class="img img-circle" height="60" width="60">
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>
<script>

    $('#show_contact').click(function(){

        alert("CONTACT :8089184921(ANIKET),9400971389(AMIT SONI)");
    });

</script>
    <script type="text/javascript" src="user/js/bootstrap.js"></script>
    <script type="text/javascript" src="user/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="user/js/jasny-bootstrap.min.js"></script>
    <script src="user/js/typed.js"></script>
    <script type="text/javascript" src="scriptA.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
