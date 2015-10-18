

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

function create_file_name(){
    $t = microtime(true);
    $micro = sprintf("%06d",($t - floor($t)) * 1000000);
    $d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
    $filename = $d->format("YmdHisu");
    return $d->format("YmdHisu")  ;
}

function save_img( $files,  $desired_dir,$dir_name){
        $errors = array();
        $images ="";
        $count = 0;
        
        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){

            $file = explode(".",$key.$_FILES['files']['name'][$key]);
            $file_name =$dir_name."-".$count.".".end($file);
            //print($file_name);
            $count++;
            $file_size =$_FILES['files']['size'][$key];
            $file_tmp =$_FILES['files']['tmp_name'][$key];
            $file_type=$_FILES['files']['type'][$key];
                                        
            $img_path = $desired_dir.'/'.$file_name;                                   
            $images = $images.",".$img_path;
            
            if($file_size > 5145728){
                $errors[]='File size must be less than 5 MB';
            }
          
            
            if(empty($errors)==true){
                if(is_dir($desired_dir)==false){
                    mkdir("$desired_dir", 0754);		// Create directory if it does not exist
                }
                if(is_dir("$desired_dir/".$file_name)==false){
                    move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                }else{									// rename the file if another one exist
                    $new_dir="$desired_dir/".$file_name.time();
                    rename($file_tmp,$new_dir) ;				
                }
                	
                
            }else{
                print_r($errors);
            }
            
            return $img_path;
        }
                                
        if(empty($error)){
            echo "Success";
            return true;
        }else return false;            

  
    }  












?>