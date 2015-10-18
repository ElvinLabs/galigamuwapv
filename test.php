<?php 
                        
                             require 'admin/db/db_connect.php';

                            
                                 $conn = connection();
                                 $email = mysqli_real_escape_string( $conn, "galigamuwa@gmail.com");
                                 $uname = mysqli_real_escape_string( $conn, "Admin");
                                 $upass = md5(mysqli_real_escape_string( $conn, "admin@321"));
                                 $query="INSERT INTO Users (username,email,password) VALUES('$uname','$email','$upass')";

                                if( $conn->query($query) ){

                                    print("<script>alert('successfully registered');</script>");    

                                }else  print("<script>alert('error while registering you');</script>");



                                $conn->close();
                            

                        
                        ?>