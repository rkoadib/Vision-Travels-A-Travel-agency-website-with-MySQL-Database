<?php

session_start();

$u_name = $_POST['username'];
$u_password = $_POST['password'];

if($u_name&&$u_password)
{
	
	$connection = mysqli_connect("localhost","root","root","travel_agency"); 
	if (mysqli_connect_error()) 
	{
		die("Database connection failed: " . mysqli_error($connection));
		
	}
	
	
	$query="select * from customer where username='$u_name';";

	$result1 = mysqli_query( $connection,$query);
		
  $numrows=mysqli_num_rows($result1);
 
		
		//echo $numrows;
		
		if($numrows!=0)
		{
			//code to login
			
			while($row=mysqli_fetch_assoc($result1))
			{
				
				$dbu_name= $row['username'];
				$dbu_password= $row['password'];
				
			}
			
			//check to see if they match
			
			if($u_name==$dbu_name && $u_password==$dbu_password)
			{
				echo "<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.5.2, http://mobirise.com -->
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='generator' content='Mobirise v2.5.2, mobirise.com'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='shortcut icon' href='assets/images/logo.png' type='image/x-icon'>
  <meta name='description' content=''>
  <title>enteruser</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese'>
  <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
  <link rel='stylesheet' href='assets/animate.css/animate.min.css'>
  <link rel='stylesheet' href='assets/mobirise/css/style.css'>
  <link rel='stylesheet' href='assets/mobirise/css/mbr-additional.css' type='text/css'>
  
  
</head>
<body>
<section class='mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse' id='menu-15'>
    <div class='mbr-navbar__section mbr-section'>
        <div class='mbr-section__container container'>
            <div class='mbr-navbar__container'>
                
                <div class='mbr-navbar__hamburger mbr-hamburger text-white'><span class='mbr-hamburger__line'></span></div>
                <div class='mbr-navbar__column mbr-navbar__menu'>
                    <nav class='mbr-navbar__menu-box mbr-navbar__menu-box--inline-right'>
                        <div class='mbr-navbar__column'><ul class='mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links'><li class='mbr-navbar__item'><a class='mbr-buttons__link btn text-white' href='http://localhost/travel_agency/Homepage.php'>HOME</a></li><li class='mbr-navbar__item'><a class='mbr-buttons__link btn text-white' href='http://localhost/travel_agency/Destinations.php'>DESTINATIONS</a></li> <li class='mbr-navbar__item'><a class='mbr-buttons__link btn text-white' href='http://localhost/travel_agency/our_services.php'>OUR SERVICES</a></li> <li class='mbr-navbar__item'><a class='mbr-buttons__link btn text-white' href='http://localhost/travel_agency/about_us.php'>ABOUT US</a></li><li class='mbr-navbar__item'><a class='mbr-buttons__link btn text-white' href='http://localhost/travel_agency/main_login.php'>LOGIN</a></li></ul></div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class='mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background' id='header4-30' style='background-image: url(assets/images/6773009-awesome-railroad-wallpaper1920x1200-167.jpg);'>
    <div class='mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center'>
        
        <div class='mbr-box__container mbr-section__container container'>
            <div class='mbr-box mbr-box--stretched'><div class='mbr-box__magnet mbr-box__magnet--center-center'>
                <div class='row'><div class=' col-sm-8 col-sm-offset-2'>
                    <div class='mbr-hero animated fadeInUp'>
                        
                        
                    </div>
                    <div class='mbr-buttons btn-inverse mbr-buttons--center'> <a class='mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay' href='http://localhost/travel_agency/user_panel.php'>Enter User Panel</a>    </div>
                </div></div>
            </div></div>
        </div>
        
    </div>
</section>


  <script src='assets/jquery/jquery.min.js'></script>
  <script src='assets/bootstrap/js/bootstrap.min.js'></script>
  <script src='assets/smooth-scroll/SmoothScroll.js'></script>
  <script src='assets/jarallax/jarallax.js'></script>
  <script src='assets/mobirise/js/script.js'></script>
  
  
</body>
</html>";
				
				
			$_SESSION['username']=$u_name;
			}
			
			else
			echo "Incorrect password";
			
	    }
		
		else
		die("<h1>That user doesn't exist</h1>");
		
		
	
}
else die ("plz enter username and password");

?>