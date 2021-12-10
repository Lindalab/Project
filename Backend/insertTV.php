<?php


// requring the file "dbconnection.php"
require ("dbconnection.php");

/*
* Insert into Television table  
* Form data is collected and set to different variables
*Conditions to be meant befor innsertion is done{
* Check if Television station name email and contact already exist , 
* 
* }
* If above condition meant then Insertion is done

*/ 


if(isset($_POST['Submit'])){
  
 $name=$_POST['name'];
 $year=$_POST['year'];
 $location=$_POST['location'];
 $radio2=$_POST['ownership_type'];
 $radio1=$_POST['view_type'];
 $ceo=$_POST['ceo'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];


 $sqlcheckTVEC="SELECT  `tvstation_name`,  `email`, `contact` 
 FROM `television_stations` 
 WHERE  tvstation_name='$name' 
 and email='$email'
  and  contact='$contact' ";
 $resultTVEC=$conn->query($sqlcheckTVEC);
 
 if($resultTVEC->num_rows === 0){
   
   $sql="INSERT INTO `television_stations`(`tvstation_name`, `founding_year`, 
  `location`, `ownership_type`, `viewtype`, `ceo_name`, `email`, `contact`)
   VALUES ('$name','$year','$location','$radio2','$radio1','$ceo','$email','$contact')";
   
   $result=$conn->query($sql);
   
   if($result === True){
     $last_id = $conn->insert_id;
    $Pendingstatus= 0;
    $sql_tvstatus="INSERT INTO `tvstatus`(`tvstation_name`, `tvstatus`) VALUES ('$name','$Pendingstatus')";
    $result=$conn->query($sql_tvstatus);
    echo '<script>
    alert("Successfully Registration");
    </script>';
    echo "Your Identification ID is: " . $last_id;
    } 
    else{
      echo "<script>
      alert('Registration unsuccessful');
      </script>";
    }

 }

 else{
  echo " <script>
  alert('Tv station exist');
  </script>";
 }

 
 
    



  
 
    } 
    
    else{
      echo "Nothing";
    }



?>
