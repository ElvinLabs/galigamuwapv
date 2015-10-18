

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






function image_save($target_dir,$files){

    $target_file = $target_dir . basename($_FILES["files"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    
        $check = getimagesize($_FILES["files"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["files"]["size"] > 5145728) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["files"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if($uploadOk != 0) return $_FILES["files"]["name"];
    else return "";
    
    

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