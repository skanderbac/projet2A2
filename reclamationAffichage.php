<?PHP

include "../core/reclamationC.php";

session_start();  
	if(!$_SESSION['username'])
	{
		header("location: login.php");
	}
	else
	{
		$reclamation1C=new ReclamationC();
		$listeReclamations=$reclamation1C->afficherReclamationsuser($_SESSION['username']);
?>


<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images/logoG.png" />
<title>Ghorbel-Optique Réclamation</title>
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
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
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
							<li><a href="logout.php"><i class="glyphicon glyphicon-user" class="men"> </i>Déconneixon</a></li>			
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
		 
			<div class="top-nav">
				<ul class="memenu skyblue"><li><a href="index.html">Acceuil</a></li>
					<li class="grid"><a href="#">Produits</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="about.html">About</a></li>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">login</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
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
					
					<li  class="active" class="grid"><a href="reclamation.php">Réclamation</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<!--<h4>Shop</h4>-->
									<ul>
										<li><a href="reclamation.php" >Faire une réclamation</a></li>
										<li><a href="reclamationAffichage.php">Consuler votre réclamation</a></li>
										<li><a href="avisAffichage.php">Voir les Avis sur notre service</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="clearfix"> </div>
			</div>
					<!---->
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>
							<img src="images/cart2-2.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Chariot vide</a></p>
						<div class="clearfix"> </div>
					</div>

<div class="clearfix"> </div>
					<!---->
				</div>
				</div>
				</div>
					</div>
<!---->
<div class="back">
	<h2>Réclamation</h2>
</div>
		<!---->
		<div class=" cart-items">
			 <h3>Consultez votre réclamation</h3>
				<!--<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>-->
			<!--<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>-->
		<div class="in-check" >
		  <ul class="unit">
			<li><span>Supprimer</span></li>
			<li><span>Probléme</span></li>		
			<li><span>Date de creation</span></li>
			<li><span>Etat</span></li>
			<li><span>Consulter</span></li>
			<div class="clearfix"> </div>
		  </ul>
		  <?PHP
			}
			foreach($listeReclamations as $row){
			?>
		   <ul class="cart-header">	 
		   <li>
		   	 <a href="reclamationSupprimer.php?date_creation=<?php echo $row['email'];?>"class="add-cart cart-check">Supprimer</a></li>
			<li><span><?PHP echo $row['probleme']; ?></span></li>
			<li><span><?PHP echo $row['date_creation']; ?></span></li>
			<li><span><?PHP echo $row['etat']; ?></span></li>
			<li> <a href="reclamationDetaille.php?emaill=<?PHP echo $row['email']; ?>" class="add-cart cart-check">Consulter</a></li>
			<div class="clearfix"> </div>
			</ul>
			<?PHP
			}
			?>
		</div>
		</div>
<div class="bottom-grid1">
					
					
<!---->
	<div class="footer">
		<div class="container">
			<!--<div class="col-md-4 footer-top">
				<form method="POST" action="avis.php" enctype="multipart/form-data">
					<h3>Votre avis sur notre service</h3>
						<script language="javascript" type="text/javascript">
									function calculeLongueur(){
   										var iLongueur, iLongueurRestante;
   										iLongueur = document.getElementById('msg').value.length;
   										if (iLongueur>30) {
     							    	document.getElementById('msg').value = document.getElementById('msg').value.substring(0,300);
      									iLongueurRestante = 0;
   										}
   										else {
     							 		iLongueurRestante = 300 - iLongueur;
   									}
   									if (iLongueurRestante <= 1)
      								document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
   									else
      								document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";
									}
							</script>
						<div class="rating">
					<span>☆</span>
					<span>☆</span>
					<span>☆</span>
					<span>☆</span>
					<span>☆</span>
					</div>
					<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Adresse Email" required autofocus>
					
						<textarea onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();" name="msg" id="msg" value="" class="form-control"  placeholder="300 Lettres au maximum" /></textarea>
						
							<input type="submit" value="Envoyer" >
						
					</form>

			</div>-->
			<div class="col-md-4 footer-top">
			</div>
			<div class="col-md-4 footer-bottom">
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
</table>
			
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
</body>
</html>