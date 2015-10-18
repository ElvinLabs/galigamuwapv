<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Galigamuwa Primary School, Kegalle</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link href='assets/css/half-slider.css' rel="stylesheet">
    
      <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="assets/js/Chart.js"></script>
      
   
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

    <?php
        include "navindex.html"
    ?>

	<div class="container" style="margin-top:-20px">
        <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" ><img src="assets/img/cv1.jpg"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" ><img src="assets/img/cv2.jpg"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" ><img src="assets/img/cv3.jpg"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" ><img src="assets/img/cv4.jpg"></div>
                <div class="carousel-caption">
                </div>
            </div>
            
        </div>
    </header>  
      </div>
	<div class="container desc">
		<div class="row">
            <div class="col-lg-9">
                <p>
                     Bordering to the Colombo Kandy main road in Galigamuwa town area, situated the Kg/Galigamuwa primary school as one of the leading school for primary education in Kegalle district.<br><br>
                The school was established around the first decade of 19th century, named as Kg/ Ballapana Kanishta Vidyalaya (consisted of both primary and secondary classes) By that time the school was under religious missionaries as a catholic school. Later in 1987 the school was re-named as Kg/Galigamuwa Primary School. Since then the school was took a great step forward re-writing it’s history as a Primary School. It was Madam Vimala Kannangara who took the initial step to change the name of the school as Kg/galigamuwa primary school.<br><br>
      Today Galigamuwa primary school caters around 500 students in five grades of primary education. The commitment of the present principal, staff and past principals teachers and parents have elevated the school in a great level day by day.

                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/img/principle.jpg" width="100%" style="border-radius:5px;">
                <p><br><t>Principle - </t>
                    Mr.R.A.C.S.Ranaweera                    
                </p>
                <hr>
                
                <?php  
                    require 'admin/db/db_connect.php';                    
                    $query_auto = "SELECT * FROM  `exam_marks` WHERE  `Exam_yr` = ( SELECT MAX(  `Exam_yr` ) FROM  `exam_marks` )";
                    $conn = connection();
                    $result = $conn->query($query_auto);
                    if( $result->num_rows > 0){
                        while( $row = $result->fetch_assoc() ){
                ?> 
                
                <div class="col-lg-12" id="skillswrap" style="padding:20px">
                    <b>Grade 5 - <?php echo ($row['Exam_yr']);  ?></b><hr>
                    Number attended - <b><?php echo ($row['Amount']);  ?></b><br>
                    Number passed - <b><?php echo ($row['Pass']);  ?></b><br>
                    Passed percentage - <b><?php echo ($row['Percentage']);  ?> %</b>
                </div>
                
                <?php
                        }                                   
                    }else  echo $conn->error;
                ?>
                
            </div>
            <div class="col-lg-4"><hr>
                <p><t>-- Vision --</t><br>
                    ” සමතුලිත පෞරුෂයකින් යුත් අනාගත ලෝකයට ගැලපෙන දරු පිරිසක් ”
                </p>
            </div>
            <div class="col-lg-8"><hr>
                <p><t>-- Mission --</t><br>
                    “ ජාතික අධ්‍යාපන අරමුණු අනුව පූර්ණ් විෂය මාලාව ක්‍රියාත්මක කිරීමෙන් දරුවන්ගේ සහජ කුසලතා උපරිමයට වර්ධනය කරමින් සමාජ විරෝධී ක්‍රියවන්ගෙන් වැලකී අන්‍ය සංස්කෘතීන්ට ගරු කරන සාරධර්ම අගයන දරු පිරිසක් බිහි කිරීම සඳය්ඩ් උපරිමයෙන් කැපවීම ”
                </p>
            </div>
		</div><!--/.row -->
		<div class="row">
            <div class="col-lg-12 text-center" id="skillswrap" style="padding:5px;border-radius:3px">
                <b>News Feed</b>
            </div>
            <div class='col-lg-4' style='margin-top:10px;border-left:2px solid #ffa5c5;'>
                <t>Grade 4 - funny activities</t><br>
                <p>
                    first place in zonel education
                </p>
            </div>
            <div class='col-lg-4' style='margin-top:10px;border-left:2px solid #ffa5c5;'>
                <t>St Jhon - KITI cadet day</t><br>
                <p>
                    the best team of the kegalle zone
                </p>
            </div>
            <div class='col-lg-4' style='margin-top:10px;border-left:2px solid #ffa5c5;'>
                <t>Galigamuwa Zone - Sport Meet</t><br>
                <p>
                    SPRW Senadhira - firstplace 100m<br>
                    RN Kaweesha Rathnayaka - 1st place 100m<br>
                    MPAA Manikpura - 3rd place - High Jump
                </p>
            </div>
          
        </div>
	</div><!--/.container -->
	
	
	

    <?php
        include "footer.html"
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
</html>
