<?php
// requring the file "dbconnection.php"
require ("dbconnection.php");

/*
* Insert into programs table and sponsor table 
*When registing a program with the new Sponsor
* Form data is collected and set to different variables
*Conditions to be meant befor innsertion is done{
* Check if Television station exist already exist 
* Check if program name  does not  exist
* }
* If above condition meant then Insertion is done

*/ 




if (isset($_POST['Submit'])){
    
    $proname=$_POST['prname'];
    $protime =$_POST['prtime'];
    $produration=$_POST['prduration'];
    $prodays=$_POST['prdays'];
    $tvstationid=$_POST['stationid'];
    $producerid=$_POST['producerid'];
    $protype=$_POST['program_type'];
    $prospon=$_POST['sponid'];


    

   $sqlcheckTVid="SELECT `tvstation_id` FROM `television_stations` WHERE tvstation_id='$tvstationid'  ";
   $resultTVID=$conn->query($sqlcheckTVid);
   if($resultTVID->num_rows > 0){

    $sqlcheckpname="SELECT `program_name` FROM `programs` WHERE program_name = '$proname' ";
        $resultpname=$conn->query($sqlcheckpname);
        if($resultpname === 0){

    $sqlprog="INSERT INTO `programs`( `program_name`, `program_type`, `program_time`, `program_daysshowed`,
     `program_duration`, `tvstation_id`, `producer_id`, `sponsor_id`) 
    VALUES ('$proname','$protype','$protime','$prodays','$produration','$tvstationid','$producerid','$prospon')";
    $resultprog=$conn->query($sqlprog);

    if($resultprog === True){
        $Pending=0;
        $sqlprostatus="INSERT INTO `programstatus`(`program_name`, `programstatus`) VALUES ('$proname','$Pending')";
        $resultprogramstatus=$conn->query($sqlprostatus);
        if($resultprogramstatus === True){
            header("location: ..\Frontend_Pages\Landingpage.php");
        echo '<script> 
            alert("Program successfully Registered");
        </script>';
        }
        else{
            echo '<script> 
            alert("Program status has not been set");
        </script>';
        }
        
        
    }
    else{
        echo $conn->error;
    }
}

else{
    echo '<script>
    alert("Program name already exist, choose a new one");
    </script> ';
}


    
                   
   }

   else{
    echo "<script>
    alert('Your Television station has not been approved wait for approval');
    </script>";
   }
   



}


?>