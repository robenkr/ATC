<!DOCTYPE html>
<html>
<head>
<title> ATC :: Souscrire</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Material Design Bootstrap -->
	<!--<link href="css/compiled.min1c9b.css" rel="stylesheet">-->
<!-- pop-up -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //pop-up -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
<!--/main-header-->
  <div class="w3layouts-top-strip">
			<div class="top-srip-agileinfo">
                <div class="agileits-contact-info text-right">
                    <ul>
                        <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +243 090 480 088</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:atcformation@gmail.com">atcformation@gmail.com</a></li>
                    </ul>
                </div>
				<div class="clearfix"></div>
			</div>
		</div>
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a  href="index.php"><span>A</span>TC <p class="s-log">Formation</p></a>

                        </h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </nav>
                <div class="w3ls_search">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>

            </div>
		<!--//header-w3l-->
		</div>
		 </div>
  <!--/banner-section-->
 <!--//main-header-->
    <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Home</a> <i> /</i></li>
				<li>Souscrire</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
<div class="col-md-12 w3l_about_bottom_right">
	<h3 class="tittle why text-center">Réservation</h3>
		<div class="book-form">
		<form action="controllers/subscribe.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idCours" value="<?php echo $_GET['idCours'];?>">
			<div class="col-md-6 form-date-w3-agileits">
				<label><i class="fa fa-user" aria-hidden="true"></i> Entreprise Name :</label>
				<input type="text" name="name" placeholder="Your name" required="">
			</div>
			<div class="col-md-6 form-date-w3-agileits second-agile">
				<label><i class="fa fa-home" aria-hidden="true"></i> Adresse :</label>
				<input type="text" name="adresse" placeholder="Your adress" required="">
			</div>
			<div class="col-md-6 form-date-w3-agileits second-agile">
				<label><i class="fa fa-envelope" aria-hidden="true"></i> Email :</label>
				<input type="email" name="email" placeholder="Your email" required="">
			</div>
			<div class="col-md-6 form-date-w3-agileits second-agile">
				<label><i class="fa fa-phone" aria-hidden="true"></i> Telephone :</label>
				<input type="text" name="phone" placeholder="Your Phone Number" required="">
			</div>
            <div class="col-md-6 form-date-w3-agileits">
                <label><i class="fa fa-calendar" aria-hidden="true"></i> Date D&eacute;but:</label>
                <input id="datepicker" name="datedebut" type="date" value="yyyy/mm/dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd';}" required="">

            </div>
            <div class="col-md-6 form-date-w3-agileits">
                <label><i class="fa fa-calendar" aria-hidden="true"></i> Date Fin:</label>
                <input id="datepicker1" name="datefin" type="date" value="yyyy/mm/dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd';}" required="">

            </div>
<!--			<div class="col-md-6 form-time-w3layouts second-agile">-->
<!--				<label><i class="fa fa-clock-o" aria-hidden="true"></i> Lieu :</label>-->
<!--				<input type="text">-->
<!--			</div>-->
<!--			<div class="col-md-6 form-number-w3-agileits">-->
<!--				<label><i class="fa fa-users" aria-hidden="true"></i> Nombre d'Agent :</label>-->
<!--				<input type="number" name="nbAgent" class="form-control" min="1">-->
<!--			</div>-->
			<div class="col-md-6 form-number-w3-agileits">
				<label><i class="fa fa-file" aria-hidden="true"></i> Fichier:</label>
				<input type="file" name="file" class="form-control" min="1">
			</div>
			<div class="clearfix"> </div>
			<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
				<input type="submit" value="Make a Reservation">
			</div>
		</form>
	</div>
</div>
			<!--//content-inner-section-->

 <!-- Footer -->
			<div class="w3agile_footer_copy">
				    <p>© 2017 Resort. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="js/main.js"></script>

<!--/script-->
	<script src="js/lightbox-plus-jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							// $().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
<!-- //Calendar -->
<!--end-smooth-scrolling-->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!---->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/compiled.min324d.js"></script>
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>