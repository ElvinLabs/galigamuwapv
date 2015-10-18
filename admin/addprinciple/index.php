
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
                    <input class="form-control" type="text" name="year" value="" placeholder="eg: 2010" required>
                </div>  
                <div class="form-group">
                    <label>From</label>
                    <input class="form-control" type="number" name="amount" value="" placeholder="eg: 100" required>
                </div>
            </div>
                <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>To</label>
                    <input class="form-control" type="number" name="pass" value="" placeholder="eg:20" required>
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
        //if($conn) echo "connected";
        //else echo "error";

        if($_POST){
        
        
            
            $year =isset( $_POST['year']) ? $_POST['year'] : 2000;
            $amount =isset( $_POST['amount']) ? $_POST['amount'] : 100;
            $pass =isset( $_POST['pass']) ? $_POST['pass'] : 0;
            $percentage =isset( $_POST['precentage']) ? $_POST['precentage'] : 0.00;
            
            $query = "INSERT INTO EXAM_MARKS(Exam_yr,Amount,Pass,percentage) VALUES('$year','$amount','$pass','$percentage')";
            
            if($conn->query($query)){
                //echo "added";
            }else echo $conn->error;
            
            
        }
    ?>