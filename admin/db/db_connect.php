

<?php




define("HOST","localhost");
define("DBNAME","galigamuwa_25533");
define("UNAME","root");
define("PW","root");




function connection(){  
    $con = mysqli_connect(HOST, UNAME, PW, DBNAME);       
    if(mysqli_connect_error() ){      
        echo( "Failed to connect to MySQL:" .mysqli_connect_error() );
    }else return $con;
}




?>