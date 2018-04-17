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
        
        <!-- Contact Us Area -->
        
        <div class="col-md-12">
        	
            <form action="formSend.php" method="post">
  				<div class="form-group">
    				<label for="name">Your Name</label>
    				<input type="text" class="form-control" id="name" placeholder="Robin Khatri" name="name">
  				</div>
  				<div class="form-group">
    				<label for="email">Your Email Address</label>
    				<input type="email" class="form-control" id="email" placeholder="me@example.com" name="email">
  				</div>
  				<div class="form-group">
    				<label for="contact">Your Contact Number</label>
    				<input type="tel" class="form-control" id="contact" placeholder="+91 9898989898">
  				</div>
                <div class="form-group">
    				<select class="form-control" id="job">
                    	<option value="">What are you looking for</option>
                        <option value="web-desgin">Website Design</option>
                        <option value="web-development">Website Development</option>
                        <option value="logo-design">Logo Design</option>
                        <option value="wordpress-development">WordPress Development</option>
                        <option value="seo">SEO</option>
                        <option value="business-card-design">Business Card Design</option>
                        <option value="other">Other</option>
                    </select>
  				</div>
                
                <textarea class="form-control" rows="3" placeholder="Type your message here..."></textarea>
                <br>
  
  				<button type="submit" class="btn btn-primary btn-lg" name="formSubmit">Submit <span class="glyphicon glyphicon-envelope"></span></button>
                <button type="reset" class="btn btn-danger btn-lg">Clear <span class="glyphicon glyphicon-trash"></span></button>
			</form>
            
        </div>
        
        <?php include('includes/footer.php') ;?>