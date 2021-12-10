<?php

// requring the file "dbconnection.php"
require ("dbconnection.php");

// Checking if the Login button is pressed
if(isset($_POST['LoginSubmit'])){
    
    $email= $_POST['email'];
    $password = $_POST['psw'];

    // Validating user email and password query
    $sqlcompare="SELECT `email`, `passwords` FROM `login` WHERE  email='$email' and passwords = '$password' ";
    $result= $conn->query($sqlcompare);

     // if statement to allow Login if match found
    if($result-> num_rows > 0){
        
        
        header("location:..\Frontend_Pages\Adminpage.php");
     exit;
    
    }
     // else statement to prevent Login if match not found

    else{
   
       echo '<script>
       alert("You do not have the correct credentials to log into this platform");
       </script>';
    }
}
else{
    echo " 
        there is nothing here to
    
    ";
}

?>