<?php
	define("TITLE", "ZEAL STUDIO");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="container">
    	<div class="row">
        	<?php include('includes/site-logo.php'); ?>            
        </div>
        
        
        <?php include('includes/site-navigation-menu.php'); ?>
        
        
        
        <?php include('includes/business-lead-text.php'); ?>
        
        <!-- Service Area -->
        
        
        	<div class="col-md-2">
            	<img src="images/webDesign-logo.png" width="60" height="60" class="img-thumbnail">
            </div>
            
            <div class="col-md-2">
            	<p>HTML5 and HTML5 Boilerplate, CSS3 with Media Queries 360 Grid System to make pixel perfecr Website Design.</p>
            </div>
            
            <div class="col-md-2">
            	<img src="images/webDev-logo.png" width="60" height="60" class="img-thumbnail">
            </div>
            
            <div class="col-md-2">
            	<p>JavaScript & jQuery along with Ajax to add interactivity and eye catching animations in Websites and faster page loads with refreshing page.</p>
            </div>
            
            <div class="col-md-2">
            	<img src="images/logoDesign-logo.png" width="60" height="60" class="img-thumbnail">
            </div>
            
            <div class="col-md-2">
            	<p>Twitter Bootstrap & Zurb Foundation Framework - No matter what is the screen size weather it is large desktop screens or mobile phones our Websites automatically adapt different screen sizes.</p>
            </div>
            
            <div class="col-md-2">
            	<img src="images/seo-logo.png" width="60" height="60" class="img-thumbnail">
            </div>
            
            <div class="col-md-2">
            	<p>Serverside Scripting through PHP - a free open source language which used by Most popular companies on web like Facebook, Amazon, Google, Yahoo, Intel, etc.</p>
            </div>
            
            <div class="col-md-2">
            	<img src="images/businessCard-logo.png" width="60" height="60" class="img-thumbnail">
            </div>
            
            <div class="col-md-2">
            	<p>WordPress - A great CMS tool which is open source and much secure enough to handle all the backend process of websites.</p>
            </div>
            
            <div class="col-md-2">
            	<img src="images/businessCard-logo.png" width="60" height="60" class="img-thumbnail">
            </div>
            
            <div class="col-md-2">
            	<p>Adobe Illustrator - A great tool from Adobe Inc. Main purpose of this tool is to provide vector based graphics and illustrations.</p>
            </div>
        
        
        <?php include('includes/footer.php') ;?>