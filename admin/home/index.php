<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("Location:../login/");
       // echo $_SESSION['user'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/assets/ico/favicon.png">

    <title>Galigamuwa Primary School, Kegalle</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
      <link href='../../assets/css/half-slider.css' rel="stylesheet">
    
      <!-- Custom Fonts -->
    <link href="../../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <script src="../../assets/js/jquery.min.js"></script>
    <script type="../../text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="../../assets/js/Chart.js"></script>
      
   
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

    <?php
        include "../nav.html"
    ?>

      
      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="text-center"><strong>Documentation</strong></h2>
      </div>
      <div class="container" style="margin-top:-20px">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3 class="text-success"><strong>Achivements</strong></h3>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">    
            <h4>How to Add a achivement ?</h4>
            <p class="text-info">
                Click on <b>Achivements</b> link and select <b>Add Achivements</b><br>
                Fill the given fields add click <b>Add</b> button
                
            </p><br>
            <h4>How to Remove a achivement ?</h4>
            <p class="text-info">
                Click on <b>Achivements</b> link and select <b>Remove Achivements</b><br>
                select the Achivement you want to remove add click <b>Remove</b> button
                
            </p>    
        </div>
        
        
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3 class="text-success"><strong>Grade 5 Marks</strong></h3>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">    
            <h4>How to Add Marks ?</h4>
            <p class="text-info">
                Click on <b>Grade 5 Marks</b> link and select <b>Add Grade 5 Marks</b><br>
                Fill the given fields add click <b>Add</b> button
                
            </p><br>
            <h4>How to Remove a Marks ?</h4>
            <p class="text-info">
                Click on <b>Grade 5 Marks</b> link and select <b>Remove Grade 5 Marks</b><br>
                select the Marks you want to remove add click <b>Remove</b> button
                
            </p>     
        </div>
        
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3 class="text-success"><strong>Principles</strong></h3>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">    
            <h4>How to Add a past Principle ?</h4>
            <p class="text-info">
                Click on <b>Principles</b> link and select <b>Add past Principles.</b><br>
                Fill the given fields add click <b>Add</b> button.
                
            </p><br>
            <h4>How to Remove a Principle ?</h4>
            <p class="text-info">
                Click on <b>Principles</b> link and select <b>Remove past Principles.</b><br>
                select the Priciple you want to remove add click <b>Remove</b> button.
                
            </p>
    
        </div>
        
        
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3 class="text-success"><strong>Clubs</strong></h3>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">    
            <h4>How to Add a Club ?</h4>
            <p class="text-info">
                Click on <b>Clubs</b> link and select <b>Add Clubs. </b><br>
                Fill the given fields add click <b>Add</b> button.
                
            </p><br>
            <h4>How to Remove a Club ?</h4>
            <p class="text-info">
                Click on <b>Clubs</b> link and select <b>Remove Clubs.</b><br>
                select the club you want to remove add click <b>Remove</b> button.
            </p>           
        </div>
        
        
        
           
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3 class="text-success"><strong>Gallery</strong></h3>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">    
            <h4>How to Add a Photo to Gallery ?</h4>
            <p class="text-info">
                Click on <b>Gallery</b> link and select <b>Add photo to Gallery.</b><br>
                Fill the given fields add click <b>Add</b> button.
                
            </p><br>
            <h4>How to Remove a photo from Gallery ?</h4>
            <p class="text-info">
                Click on <b>Gallery</b> link and select <b>Remove photo from Gallery</b><br>
                select the photo you want to remove add click <b>Remove</b> button.
                
            </p>
  
        </div>
          
          
          
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3 class="text-success"><strong>Notices</strong></h3>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">    
            <h4>How to Add a Notice ?</h4>
            <p class="text-info">
                Click on <b>Notices</b> link and select <b>Add Notices.</b><br>
                Fill the given fields add click <b>Add</b> button.
                
            </p><br>
            <h4>How to Remove a Notice ?</h4>
            <p class="text-info">
                Click on <b>Notices</b> link and select <b>Remove Notices</b><br>
                select the notice you want to remove add click <b>Remove</b> button.
                
            </p>
  
        </div>
           
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/bootstrap.js"></script>
  </body>
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
</html>
