<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    $error ='';

    require_once ('models/dao/connexiondb.class.php');
    require_once ('models/dao/coursDAO.php');
    include_once('controllers/get_all_cours.php');
?>
<!DOCTYPE html>
<html>
<head>
<title> ATC :: Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Material Design Bootstrap -->
	<link href="css/compiled.min1c9b.css" rel="stylesheet">
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
  <!--/banner-section-->
  <div class="w3layouts-top-strip">
				<div class="col-md-12 agileits-contact-info text-right ">
					<ul>
						<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +243 090 480 088</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:atcformation@gmail.com">atcformation@gmail.com</a></li>
 						<li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i> Sign in</a></li>
                        <?php
                        if (isset($_GET['error'])){
                            if($_GET['error'] == 0){
                                $error = "Matricule ou mot de passe incorrect!";
                                echo "<p class='alert alert-danger alert-dismissible'><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>".$error."</p>";
                            }
                        }
                        ?>
					</ul>
				</div>
			  <div class="w3layouts_header_left">
				  <ul>
				  </ul>

			  </div>
				<div class="clearfix"></div>
			</div>
		</div>
	<div id="demo-1" data-zs-src='["images/1.jpg", "images/1.jpg", "images/1.jpg","images/1.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
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
											<li class="active"><a href="index.php">Accueil</a></li>
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
			<!--/banner-info-->
			   <div class="baner-info">   
			      <h3>Bien<span>Venue </span>à l'<span>ATC </span></h3>
				  <p>Améliorez les compétences des vos agents</p>
			   </div>
			<!--/banner-ingo-->
			
		</div>
		   </div>
    </div>
  <!--/banner-section-->
 <!--//main-header-->
 	<div class="special featured">
		  <div class="container">
				   <div class="ab-w3l-spa">
				        <h3 class="tittle">Bienvenue a l'ATC!</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the 1500s.Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellusMaecenas ac hendrerit purus. Lorem ipsum dolor sit amet.Lorem Ipsum is simply dummy text of the printing and typesetting industry
							</p>
				   </div>
		   </div>
    </div>
		<!-- about-bottom -->

<!-- //about-bottom -->

	<!-- about-bottom -->
<br>
	<div class="about-bottom container" id="ab">
		<h2 class="tittle why text-center">Nos formations</h2>
		<table class="table table-hover table-striped">
			<thead class="thead-inverse">
			<tr>
				<th>Cours</th>
				<th>Prix</th>
				<th>-----</th>
			</tr>
			</thead>
			<tbody>
            <?php foreach ($res as $cours){
            ?>
			<tr>
				<td><?php echo ucfirst($cours['nomCours']);?></td>
				<td><?php echo ucfirst($cours['prixCours']);?>$ (par personne/heure)</td>
				<td><a href="souscrire.php?idCours=<?php echo $cours['idCours'];?>" class="badge">S'incrire</a></td>
			</tr>
            <?php }?>
			</tbody>
		</table>

		<div class="clearfix"> </div>
	</div>
<div class="modal fade modal-ext" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="agileinfo_sign">Connexion</h3>
			</div>
			<div class="modal-body">
				<form action="controllers/connexion.php" method="post">
					<div class="md-form">
						<input type="text" class="form-control" name="login" placeholder="Pseudo" required="">
					</div>
					<div class="md-form">
						<input type="password" class="form-control" name="password" placeholder="Password" required="">
					</div>
					<div class="tp">
						<input class="btn btn-primary btn-outline-success" type="submit" value="Se connecter">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign Up</h3>
					<div class="login-form">
						<form action="#" method="post">
							<input type="text" name="name" placeholder="Username" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<input type="password" name="password" placeholder="Confirm Password" required="">
							<input type="submit" value="Sign Up">
						</form>
					</div>
					<p><a href="#"> By clicking register, I agree to your terms</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal2 -->

<div class="w3agile_footer_copy">
				    <p>© 2018 QTC. All rights reserved | Design by <a href="#">Roben</a></p>
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
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<!--//script for portfolio-->
				<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
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
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});


                        $('#modal').on('shown.bs.modal', function () {
                            $('#myInput').focus()
                        })
 		</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!---->
<!-- MDB core JavaScript -->
<!--<script type="text/javascript" src="js/compiled.min324d.js"></script>-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>