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
        
        
        
        <?php include('includes/business-lead-text.php') ;?>
        
        <?php include('includes/business-intro-text.php'); ?>
        
        <div class="col-md-4 image">
        	<img src="images/AndrewZimmern.jpg" alt="Andrew Zimmern" class="img-thumbnail">
        </div>
        
        
        <div class="col-md-4 image">
        	<img src="images/brad.jpg" alt="Brad Hussey" class="img-thumbnail">
        </div>
        
        
        <div class="col-md-4 image">
        	<img src="images/lea.jpg" alt="Lea Verou" class="img-thumbnail">
        </div>
        
        
        <?php include('includes/footer.php') ;?>