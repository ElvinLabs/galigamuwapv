
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
    <link rel="stylesheet" href="../assets/css/custom.css">
    <script src="../../assets/js/jquery.min.js"></script>
    <script type="../../text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="../../assets/js/Chart.js"></script>
      
   
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

    <?php

        include "../../nav.html"
    ?>

	<div class="container" style="margin-top:-20px">
      
        
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
        
        

            <form role="form" action="index.php" method="post" enctype="multipart/form-data"  accept-charset="utf-8" >  
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" value=""  required>
                </div>  
                <div class="form-group">
                    <label>Date</label>
                    <input class="form-control" type="date" name="date" value="" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input class="form-control" type="text" name="des" value="" required>
                </div>
                
                <div class="form-group">
                    <input class="form-control" type="submit" value="Add">
                </div>
            </form>
            
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
    <?php 

           
        require '../db/db_connect.php';
        $conn = connection();
        if($conn) echo "connected";
        else echo "error";

        if($_POST){
        
        
            
            $title     =isset( $_POST['title']) ? $_POST['title'] : "";
            $date      =isset( $_POST['date']) ? $_POST['date'] : 2010;
            $des       =isset( $_POST['des']) ? $_POST['des'] : "";
            
            $query = "INSERT INTO Achivements(Title,Description,A_date) VALUES('$title','$des','$date')";
            
            if($conn->query($query)){
                echo "added";
            }else echo $conn->error;
            
            
        }



















    ?>