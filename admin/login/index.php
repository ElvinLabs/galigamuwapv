  <?php
    session_start();
    if(isset($_SESSION['admin'])!="")
    {
        header("Location:../home/");
    }                   
?>
<?php 
    if($_POST){  
        require "../db/db_connect.php";
        $conn = connection();
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $upass = mysqli_real_escape_string($conn,$_POST['password']);
        $query="SELECT * FROM Users WHERE username='$uname'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();                             
        if($row['Password']==md5($upass) ){
            $_SESSION['admin'] = $row['user_id'];
            header("Location: ../home/"); 
        }else print("<script>alert('wrong details');</script>"); 
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
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="margin-top:100px;">
                    <div class="panel-heading" style="background-color:#31A998">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">    
                        <form role="form" action="index.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="uname" name="uname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <div class="form-group">
                                    <input class="form-control" name="login" type="submit" value="Login" style="background-color:#31A998">
                                </div>
                            </fieldset>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/bootstrap.js"></script>
</body>
</html>



