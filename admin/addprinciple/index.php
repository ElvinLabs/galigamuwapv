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

	<div class="container" style="margin-top:-20px">
      
        <div class="col-lg-12 text-center"><t>Add Principles</t><hr></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">        

        <form role="form" action="index.php" method="post"  accept-charset="utf-8" > 
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="" required>
                </div>  
                <div class="form-group">
                    <label>From</label>
                    <input class="form-control" type="date" name="str_date" value="" placeholder="eg: 2010" required>
                </div>
            </div>
                <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>To</label>
                    <input class="form-control" type="date" name="end_date" value="" placeholder="eg:2012" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="submit" value="Add">
                </div>
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
        if($_POST){     
            $name =isset( $_POST['name']) ? $_POST['name'] : "";
            $str_date =isset( $_POST['str_date']) ? $_POST['str_date'] : 2010;
            $end_date =isset( $_POST['end_date']) ? $_POST['end_date'] : 2012;
//            $percentage =isset( $_POST['precentage']) ? $_POST['precentage'] : 0.00;       
            $query = "INSERT INTO Principles(Name,Start_date,End_date) VALUES('$name','$str_date','$end_date')";         
            if($conn->query($query)){
                echo "added";
            }else echo $conn->error;
            
            
        }
    ?>