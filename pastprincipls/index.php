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
      
	<div class="container desc" style="margin-bottom:30px">
		<div class="row">
             <div class="col-lg-12 text-center"><t>Details of Past Principls</t><hr></div>
            <div class="col-lg-12">
            <p></t>Galigamuwa Primary School was first established in about 1900. This was first considered as a upakrutha school and, from the day of 01st April 1962 this was arrogated to the government under the name of Ballapana Roman Catholic College. At that time there were 262 students and 10 teachers. On 16th March 1964, this school was re-organized with the Medagodalanda College. </p>
            </div>
             <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-12">
                        <div class="col-lg-12" id="skillswrap" style='padding:5px;border-left:2px solid #ffa5c5;'>
                            <b>Name       </b>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="col-lg-12" id="skillswrap" style='padding:5px;border-left:2px solid #ffa5c5;'>
                            <b>From</b>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="col-lg-12" id="skillswrap" style='padding:5px;border-left:2px solid #ffa5c5;'>
                            <b>To</b>
                        </div>
                    </div>
                    </div>
                </div>
                <?php  
                    require '../admin/db/db_connect.php';                    
                    $query_auto = "SELECT * FROM principles";
                    $conn = connection();
                    $result = $conn->query($query_auto);
                    if( $result->num_rows > 0){
                        while( $row = $result->fetch_assoc() ){
                ?> 
                <div class="col-lg-12" style="margin:5px">
                    <div class="col-lg-6 col-xs-12">
                            <b><?php echo ($row['Name']);  ?></b>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                            <?php echo ($row['Start_date']);  ?>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                            <?php echo ($row['End_date']);  ?>
                    </div>
                    </div>
                <?php
                        }                                   
                    }else  echo $conn->error;
                ?>
            
            
		</div><!--/.row -->		
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
