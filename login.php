<?php
	session_start();
	require('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])){
       $username=$_POST['username'];
       $password=$_POST['password'];
       $sql="select * from user where username='$username' and password='$password'";
       $result=mysqli_query($connection,$sql);
       $count=mysqli_num_rows($result);
       if ($count == 1)
       {
       		$_SESSION['username'] = $username;
         // $_SESSION['id'] = $id;
       }
       else
       {
       	$msg="Invalid username or password";
       }
    }
    if(isset($_SESSION['username']))
    {
    	//$fmsg= "User already logged in";
    	header("location: reclamation.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Connecter</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="I-wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<!--//slider-script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
		<div class="header-info">
			<div class="container">
					<div class="header-top-in">
						
						<ul class="support">
							<li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope"> </i>ghorbel.optique@gmail.com</a></li>
							<li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>+216 53 467 028</span></li>			
						</ul>
						<ul class=" support-right">
							<li><a href="login.php"><i class="glyphicon glyphicon-user" class="men"> </i>S'authentifier</a></li>
							<li><a href="register.php"><i class="glyphicon glyphicon-lock" class="tele"> </i>Créer un compte</a></li>			
						</ul>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>	
<div class="header header5">
	<div class="header-top">

			<div class="header-bottom">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.html">Ghorbel-<span>Optique</span></a></h1>
				</div>
		 <!---->
		 
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.html">Acceuil</a></li>
					<li class="grid"><a href="views/productMen.php">Produits</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Boutique</h4>
									<ul>
										<li><a href="about.html">A propos</a></li>
										<li><a href="views/productWomanS.php">Lunettes de soleil Femme</a></li>
										<li><a href="views/productWomanV.php">Lunettes de vue Femme</a></li>
	
										<li><a href="product.html">login</a></li>
										<li><a href="product.html">Marques</a></li>
										<li><a href="product.html">Mon panier</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Zone de Style </h4>
									<ul>
										<li><a href="views/productMen.php">Homme</a></li>
										<li><a href="views/productWoman.php">Femme</a></li>
										
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Marques populaires</h4>
									<ul>
										<li><a href="product.html">Levis</a></li>
										<li><a href="product.html">Persol</a></li>
										<li><a href="product.html">Nike</a></li>
										<li><a href="product.html">Edwin</a></li>
										<li><a href="product.html">New Balance</a></li>
										<li><a href="product.html">Jack & Jones</a></li>
										<li><a href="product.html">Paul Smith</a></li>
										<li><a href="product.html">Ray-Ban</a></li>
										<li><a href="product.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					
					<li class="grid"><a href="contact.html">A propos</a>
						
					</li>
				</ul>
				<div class="clearfix"> </div>
			</div>
					<!---->
					<div class="cart box_1">
						
					</div>

<div class="clearfix"> </div>
					<!---->
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>	
 				<div class="clearfix"> </div>	
			</div>
<!---->
<div class="back">
	<h2>Authentification</h2>
</div>
		<!---->
		<div class="container">
		<div class="account_grid">
			   <div class=" login-right">
			  	<h3>CLIENTS ENREGISTRÉS</h3>
				<p>Si vous avez un compte avec nous,Connecter vous</p>
				<form class="form-signin" method="POST">
				  <div>
					<span>Utilisateur</span>
					<input type="text" name="username" class="form-control" placeholder="Utilisateur" required>
				  </div>
				  <div>
					<span>Mot de passe</span>
					<input  type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required> 
				  </div>
				  <a class="forgot" href="#">Mot de passe oublié?</a>
				  <input type="submit" value="S'authentifier">
			    </form>
			   </div>	
			    <div class=" login-left">
			  	 <h3>NOUVEAU CLIENT</h3>
				 <p>En créant un compte dans notre magasin, vous pourrez passer plus rapidement du processus de commande, enregistrer plusieurs adresses d'expédition, afficher et suivre vos commandes dans votre compte, etc.</p>
				 <a class="acount-btn" href="register.php">Créer un compte</a>
			   </div>
			
			 </div>
		
			</div>
			<!---->
				<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>BON SHOPPING</h3>
						<p></p>
					</div>
				</div>
<!---->
	<!---->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-top">
				

			</div>
			<div class="col-md-4 footer-middle">
				
				<h3>Contactez nous</h3>
				<div class="logo-footer">
					<ul class="social">
		                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fb"> </i> </a></li>
		                    <li><a href="#"><i class="rss"></i></a></li>
		                    <li><a href="#"><i class="twitter"></i></a></li>
		                    <li><a href="#"><i class="dribble"></i></a></li>
		                    <div class="clearfix"></div>
		                </ul>
					<div class="clearfix"> </div>
				</div>
				<div class="indo">
					<ul class="social-footer ">
						<li><span><i class="glyphicon glyphicon-earphone"> </i>+216 53 467 028 </span></li>
						<li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope" class="mes"> </i>ghorbel.optique@gmail.com</a></li>
					</ul>
					<a href="#"><img src="images/pa.png" alt=""></a>
					</div>

			</div>
			<div class="col-md-4 footer-bottom">
				
			</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>
				 <!---->
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
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
<!---->
<?php if(isset($fmsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<?php if(isset($msg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $msg; ?> </div><?php } ?>
</body>
</html>