<?php

define ('DB_NAME' ,'blog');
define ('DB_USER' ,'sonia');
define ('DB_PASSWORD' ,'soniadb09763ak');
define ('DB_HOST' ,'localhost');

$link =mysqli_connect(DB_HOST, DB_USER , DB_PASSWORD);

if(!$link)
{
	die('couldn not connect' .mysql_error());
}

$db_selected = mysqli_select_db( $link,DB_NAME);

if(!$db_selected)
{
	die('can not use db name ' .DB_NAME. ':' .mysql_error());
}
/*
echo 'connected successfully..';
*/

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$emailid = $_POST['emailid'];

$sql= "INSERT INTO subscriber  (First_Name ,Last_Name, Email)VALUES ('$fname','$lname','$emailid') ";


if(!mysqli_query($link,$sql))
{
	die('error : ' .mysql_error());
}


mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<!--html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sonia Sankpal's Blog">
	<meta name="keywords" content="Poems,Articles,Quotes,On Current Topics,SoniaSankpalBlog">
	<meta name="author" content="Sonia Sunil Sankpal">
	<title>SoniaSankpalBlog</title>
	<link rel="icon" href="images/fevicon.png">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/normalize.css">
	 <link rel="stylesheet" href="css/simple-line-icons.css">
	  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	  <script src="js/js/vendor/modernizr-2.6.2.min.js"></script>
	 
	 
</head>


<div class="body">

	<!-- ===========================
         NAVBAR START
         =========================== -->
          <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
               <div class="container">
                   
                      <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                        
                            <a class="navbar-brand" href="AboutMe.html">
                            <!-- Replace Drifolio Bootstrap with your Site Name and remove icon-grid to remove the placeholder icon -->
                            <font color="#000099">
                            <span class="brandname">Sonia <b>Sankpal</b></span>
							</font>
						</a>
						
                    </div>
						
						<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                         <ul class="nav navbar-nav navbar-right">
						
                
					    <ul class="nav nav-pills">
							<li class="active"><a href="sonia.html">Home</a></li>
							<li><a href="Poems.html">Poems</a></li>
							<li><a href="Articles.html">Articles</a></li>
							<li><a href="Quotes.html">Quotes</a></li>
							<li><a href="OnCurrentTopics.html">On Current Topics</a></li>
							<li><a href="AboutMe.html">About Me</a></li>
						</ul>
						</ul>
						</ul>
						</div>
				<!--.nav-collapse -->
            </div>
        </nav><!--navbar end--> 
		 
	</br></br>
	</br></br></br>
	
	<img class="displayed" src="images/submit.gif" alt="submitted"></img>
	
	<br><br>
	<h1 align="center">
	<font color="green" size="25px" >Submitted Successfully!!!</font>
	</h1>
	
</div>
	<br><br><br>
	

<footer>
	
      
            <!---span class="bigicon icon-speedometer "></span--->
             
            <!---div class="footerlinks">            
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Poems.html">Poems</a></li>
						<li><a href="Articles.html">Articles</a></li>
                    <li><a href="OnCurrentTopics.html">On Current Topics</a></li>
                    <li><a href="AboutMe.html">About Me</a></li>

                    <!--replace the email address below with your email address-->
                    <!---li><a href="mailto:vision15@gmail.com">Contact Us</a></li>                   
                </ul>
            </div-->
             
           
             
            <div class="footersocial wow fadeInUp animated" data-wow-duration="3s" style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;"><!-- FOOTER SOCIAL ICONS START -->
                <ul>
                   <li><a href="https://www.facebook.com/sonia.sankpal" target="black"><span class="fa fa-facebook-square fa-2x"></span></a></li>
                    <li><a href="https://in.linkedin.com/in/soniasankpal" target="black"><span class="fa fa-linkedin-square fa-2x"></span></a></li>
					<li><a href="https://twitter.com/soniasankpal" target="black"><span class="fa fa-twitter-square fa-2x"></span></a></li>
                    
                 </ul>
             </div><!-- FOOTER SOCIAL ICONS END -->
			  <div class="copyright"><!-- FOOTER COPYRIGHT START -->
			
				<h4><p>Contact me => contact@soniasankpal.16mb.com</p></h4>
                </br>
				<p>Copyright© 2016 soniasankpalblog</p>
            </div><!-- FOOTER COPYRIGHT END -->
         

		  <!--<span><div class="clock" style="margin:2em;"></div>
		
		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();
				var futureDate = new Date("February 15, 2015 09:00:00");
				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});
		</script></span>-->
		
     <!-- FOOTER END -->
	 
    </footer>
	
	
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/drifolio.js"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 430px; float: right; width: 5px; height: 93px; border: none; border-radius: 10px; background-color: rgb(234, 147, 18); background-clip: padding-box;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 5px; z-index: auto; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: absolute; top: 0px; height: 5px; width: 1366px; border: none; border-radius: 10px; background-color: rgb(234, 147, 18); background-clip: padding-box;"></div></div>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>  
	

</html>



