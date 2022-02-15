<?php
          
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='api_data';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
          
               $name = $_POST['name'];
               $age = $_POST['age'];
               $email = $_POST['email'];
            

            $sql = "INSERT INTO `data`(`name`, `age`, `email`) VALUES ('$name','$age','$email')";
               
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error());
            }
            
            echo "Entered data successfully\n";
            
            mysqli_close($conn);
          
            ?>