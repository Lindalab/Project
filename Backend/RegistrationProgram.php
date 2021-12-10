<?php
 require ("functions.php");
?>

<!-- Code for Approved button -->
<?php
/*
*Checking if Disapprove button has been clicked
* get tv Name and store to variable $tv_name
* Setting status(Pending=0,Approve= 1, Disapprove= 2)
*/
if(isset($_GET['Approve'])){
  $pr_name=$_GET['proname'];
  $Approve= 1;

  /*
   *Function 
   * @param  $tv_name(user input) and $dissapprove (form name)
   * inserting to set status if disspproved
   *
  */
  function insertProgStatus($pr_name, $Approve){
     require ("dbconnection.php");
     $sqlinsert=" INSERT INTO `programstatus`(`program_name`, `programstatus`) VALUES ('$pr_name','$Approve')";
     $resultinsert= $conn->query($sqlinsert);
     if($resultinsert === TRUE){
       echo "<script>
       alert('Program APPROVED!!');
       </script>"; 
      }
     else{
      echo "Status has not been set";
      echo $conn->error;}
    }
  /*
   *Function 
   * @param  $tv_name(user input) and $dissapprove (form name)
   * Update tv status if tv name exits
   *
  */
   function update($pr_name, $Approve){
     require ("dbconnection.php");
     $sqlupdates="UPDATE `programstatus` SET `programstatus`='$Approve' WHERE `program_name`= '$pr_name' ";
     $sqlupdateresult=$conn->query($sqlupdates);
     if($sqlupdateresult){
       echo "<script>
       alert('Program  APPROVED!!');
       </script>";
       }
     else{
       echo "<script>
       alert('Could not approve PROGRAM!!');
       </script>";}
    }

    /*
    * Checking if TV name Exist
    * if exist, update status
    * Else , insert tv name and status disapprove
    */
    require ("dbconnection.php");
    $sqlcheckstatus=" SELECT `program_name`, `programstatus` FROM `programstatus` WHERE  program_name= '$pr_name' ";
    $sqlcheckresult=$conn->query($sqlcheckstatus);
    if($sqlcheckresult-> num_rows > 0){
      update($pr_name, $Approve);
    }
    else {

    insertProgStatus($pr_name, $Approve);}
  

}
?>




<!-- Code for Disprove button -->
<?php
/*
*Checking if Disapprove button has been clicked
* get tv Name and store to variable $tv_name
* Setting status(Pending=0,Approve= 1, Disapprove= 2)
*/
if(isset($_GET['Disapprove'])){
  $pr_name=$_GET['prname'];
  $disapprove= 2;

  /*
   *Function 
   * @param  $tv_name(user input) and $dissapprove (form name)
   * inserting to set status if disspproved
   *
  */
  function insertStatus($pr_name, $disapprove){
     require ("dbconnection.php");
     $sqlinsert=" INSERT `programstatus`(`program_name`, `programstatus`) VALUES ('$pr_name','$disapprove') ";
     $resultinsert= $conn->query($sqlinsert);
     if($resultinsert === TRUE){
       echo "<script>
       alert('PROGRAM IS DISAPPROVED!!');
       </script>"; 
      }
     else{
      echo "Status has not been set";
      echo $conn->error;}
    }
  /*
   *Function 
   * @param  $tv_name(user input) and $dissapprove (form name)
   * Update tv status if tv name exits
   *
  */
   function update($pr_name, $disapprove){
     require ("dbconnection.php");
     $sqlupdates="UPDATE `programstatus` SET `programstatus`='$disapprove' WHERE `program_name`= '$pr_name' ";
     $sqlupdateresult=$conn->query($sqlupdates);
     if($sqlupdateresult){
       echo "<script>
       alert('PROGRAM IS  DISAPPROVED!!');
       </script>";
       }
     else{
       echo "<script>
       alert('Could not disapprove tv station');
       </script>";}
    }

    /*
    * Checking if TV name Exist
    * if exist, update status
    * Else , insert tv name and status disapprove
    */
    require ("dbconnection.php");
    $sqlcheckstatus="SELECT `program_name`, `programstatus` FROM `programstatus` WHERE  program_name= '$pr_name'  ";
    $sqlcheckresult=$conn->query($sqlcheckstatus);
    if($sqlcheckresult-> num_rows > 0){
      update($pr_name, $disapprove);
    }
    else {
    insertStatus($pr_name, $disapprove);}
  

}
?>





  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Program Approval Page</title>
  </head>
  <body>
    <h4 style= "margin-left:20%; margin-top: 3%;">Pending List of Registered Programs</h4><br>
<a href="..\Frontend_Pages\Adminpage.php"  id="Logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back to Admin</a>
    <form  style="float:right; padding-top: 20px;">
      <label>View</label><br>
    <input type="radio"  name="status" value="0"><span>Pending</span><br>
      <input type="radio"  name="status" value="1"><span>Approve</span> <br>
      <input type="radio"  name="status" value="2"><span>Disaprove</span><br>
      <input type="submit"  value = 'Apply' class="signupbtn" name="Apply">
      <input type="submit"  value = 'View all TV Station' class="signupbtn" name="view_all">
   
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Program Name</th>
      <th scope="col">Program Type</th>
      <th scope="col">Days</th>
      <th scope="col">Time</th>
      <th scope="col">Television Station</th>
      <th scope="col">Sponsor</th>
      <th scope="col">Duration</th>
      <th scope="col">Producer</th>
      <th scope="col">Approve</th>
      <th scope="col">Disapprove</th>

    </tr>
  </thead>
  <tbody>

    <?php

    /*
    *This file allows and admin to view dispproved and approved Programs 
    * Used status to a number to enable approve and disapprove , pending
    *@Approve =1 @dispprove=2 @pending=0

    */
        //Selecting from database
        require ("dbconnection.php");
        if(isset($_GET['Apply'])){
          $status=$_GET['status'];
        
          $sqlstatusProg= "SELECT programs.program_name, program_type, program_time, program_daysshowed, program_duration, programs.tvstation_id, programs.producer_id, programs.sponsor_id, television_stations.tvstation_name ,producer.fname, producer.lname, sponsors.sponsor_name, programstatus.programstatus FROM programs, television_stations, sponsors, producer ,programstatus WHERE television_stations.tvstation_id = programs.tvstation_id and programs.producer_id = producer.producer_id and programs.sponsor_id = sponsors.sponsor_id and programstatus.program_name = programs.program_name and programstatus.programstatus='$status' ";
            $resultstatusProg=$conn->query($sqlstatusProg);
            if($resultstatusProg->num_rows >0){
            while($row = $resultstatusProg->fetch_assoc()){
               // output data of each row
                $prname= $row['program_name'];
                $prtype=$row['program_type'];
                $prdays = $row['program_daysshowed'];
                $prtime=$row['program_time'];
                $tvstation = $row['tvstation_name'];
                $prspon=$row ['sponsor_name'];
                $prduration = $row['program_duration'];
                $proproducer = $row['fname']." ".$row['lname'];
                InsertProg($prname,$prtype,$prdays,$prtime,$tvstation,$prspon,$prduration, $proproducer);
                  }
               } 
            else {
                   echo "0 results";
                 }
            }
        
            
        
        
        else{
          $selectSql="SELECT `program_name`, `program_type`, `program_time`, `program_daysshowed`, `program_duration`, programs.tvstation_id, programs.producer_id, programs.sponsor_id, television_stations.tvstation_name ,producer.fname, producer.lname, sponsors.sponsor_name 
          FROM `programs`, `television_stations`, sponsors, producer 
          WHERE television_stations.tvstation_id = programs.tvstation_id and programs.producer_id = producer.producer_id and programs.sponsor_id = sponsors.sponsor_id";
        
          $resultSelect=$conn->query($selectSql);
          if ($resultSelect->num_rows > 0) {
             // output data of each row
            while($row = $resultSelect->fetch_assoc()) {
             $prname= $row['program_name'];
             $prtype=$row['program_type'];
             $prdays = $row['program_daysshowed'];
             $prtime=$row['program_time'];
             $tvstation = $row['tvstation_name'];
             $prspon=$row ['sponsor_name'];
             $prduration = $row['program_duration'];
             $proproducer = $row['fname']." ".$row['lname'];
             InsertProg($prname,$prtype,$prdays,$prtime,$tvstation,$prspon,$prduration, $proproducer);
             }
            } 
         else {
                echo "0 results";
              }
        
        
        }
        
      ?>
    </tbody>
  </table>
    </body>
</html>


<?php
require ("dbconnection.php");

?>








 
