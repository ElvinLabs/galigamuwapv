<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <title>Galigamuwa Primary School, Kegalle</title>

    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
      <link href='../assets/css/half-slider.css' rel="stylesheet">
    
      <!-- Custom Fonts -->
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/css/custom.css">
    <script src="../assets/js/jquery.min.js"></script>
    <script type="../text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="../assets/js/Chart.js"></script>
      
   
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

    <?php
        include "../nav.html"
    ?>
	
	<div class="container desc">
		<div class="row">
            
           <?php  
                    require '../admin/db/db_connect.php';                    
                    $query_auto = "SELECT * FROM notice_bord";
                    $conn = connection();
                    $result = $conn->query($query_auto);
                    if( $result->num_rows > 0){
                        while( $row = $result->fetch_assoc() ){
                ?>
            
        <div class="col-lg-12" id="skillswrap" style="padding:5px;border-radius:3px;margin-top:20px;">
                <b><?php echo ($row['Title']);  ?></b>
            </div>
            <div class='col-lg-12' style='margin-top:10px;'>
                <div class="row">
                    <div class="col-lg-8 col-xs-12">
                        <img src="<?php echo ($row['C_img']);  ?>" width="100%">
                    </div>
                    <div class="col-lg-4 col-xs-12">
                        <p>
                            <b>Teacher Incharge -</b> <?php echo ($row['Incharge']);  ?><hr>
                            <?php echo ($row['Description']);  ?>
                        </p>
                    </div>
                </div>
            </div>
        
        
    <?php
                        }                                   
                    }else  echo $conn->error;
                ?>
          
        </div>
	</div><!--/.container -->
	
	
	

    <?php
        include "../footer.html"
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/bootstrap.js"></script>
  </body>
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
</html>
