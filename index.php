<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Suministros y Soluciones Panamá</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/unslider.css">   
    <link rel="stylesheet" href="css/unslider-dots.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="css/style.css">

	
</head>
<body>
<div class="main-page">
  <header>
      <div class="container"> 
          <div class="navbar-info row">
              <div class="col-md-5">
              </div>
              <div class="col-md-7 col-sm-12 align">
                 <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 
                 <a href="contacto.php"><p>005073872912</p></a>
                 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
                 <a href="contacto.php"><p> info@suministrosysolucionespanama.com </p></a>
              </div>
              
              
          </div>

          <div class="logo-nav row">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <img src="logo.png"> 
              <p><i>La solución a sus problemas</i></p>
            </div> 


          </div>  

          
      </div>
  </header>
  <?php include "slideshow.php" ?>
  <?php include "serviciosFront.php" ?>
  <?php include "map.php" ?>
  <?php include "footer.php" ?>
</div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/unslider.js"></script>
<script src="js/main.js"></script>


<script>
  jQuery(document).ready(function($) {
    $('.my-slider').unslider();
  });
</script>
 

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>