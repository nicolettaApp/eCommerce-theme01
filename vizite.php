<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mihaela Mihalache</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<a href="https://www.facebook.com/PrivatePhotoSessions/" class="fa fa-facebook"></a>
<a href="https://www.google.com/gmail/about/" class="fa fa-google"></a>
<a href="https://www.linkedin.com/uas/login" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/?hl=ro" class="fa fa-instagram"></a>
<a href="https://ro.pinterest.com/
" class="fa fa-pinterest"></a>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							  <a href="./index.html" class="btn btn-info" role="button">ACASA</a>	
							 <a href="./opinie.html" class="btn btn-info" role="button">CARTE DE OASPETI </a>
                              <a href="./login.html" class="btn btn-info" role="button">ADMINISTRATOR </a>	

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
						    <li><a href="./about.html">Biografie artist</a></li>
							<li><a href="./produs.php">Picturi in vanzare</a>	</li>				
																						
							<li><a href="./picturi.html">Galerie de Lucrari</a></li>			
						
							<li><a href="./contacte.php"> Contact</a></li>
						</ul>
					</nav>
				</div>
			</section>							
			

			
			<main>
  <h1 class="italic centrat"><span class="litera italic">I</span>mpresii ale vizitatorilor</h1><br />
<?php
include("conn.php");
 
 class Vizitatori {
   public $nr;  //  Cheia primara
   public $nume;
   public $prenume;
   public $email;
   public $mesaj;
}
   
   if(isset($cnx)) {
      $cda = "SELECT * FROM vizitatori ORDER BY nr DESC";
      $stmt = $cnx->prepare($cda);
    $stmt->execute();
      echo "<table style=\"width:100%; \">";
      $i=1; //  Contor de linii
      while ($vizit = $stmt->fetchObject('Vizitatori')) {
         if ($i%2==0) {
            echo "<tr style=\"background-color:#cccccc; \"><td>";
         }
         else {
            echo "<tr style=\"background-color:#a0a0a0; \"><td>";
        }
        echo $vizit->nr; echo ".    ";
        echo $vizit->nume; echo "    ";
        echo $vizit->prenume; echo "  --  ";
        echo $vizit->email;
        echo "<br /><br />";
        echo $vizit->mesaj;
        echo "</td></tr>";
        echo "<tr><td> </td></tr>";
        $i++;
   }
   $cnx = null;
   }
?>
        </table>
</main>


		<center>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigare site</h4>
						<ul class="nav">
							<li><a href="./index.html">Acasa</a></li>  
							<li><a href="./about.html">Biografie Artist</a></li>
                        	<li><a href="./produs.php">Picturi</a></li>
							<li><a href="./contacte.html">Contacteaza-ne</a></li>
							<li><a href="./login.html">Logare</a></li>							
						</ul>					
					</div>
					
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>"Pictura este o artă a privirii, sculptura este o artă a atingerii, matematica este o artă a gândirii, muzica este o artă a sufletului."</p>
						<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2017 Mihaela Mihalache. All right reserved.</span>
			</section>
		</div>
		</center>
		<script src="themes/js/common.js"></script>		
    </body>
</html>