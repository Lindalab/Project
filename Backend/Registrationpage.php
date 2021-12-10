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
  $tv_name=$_GET['name'];
  $Approve= 1;

  /*
   *Function 
   * @param  $tv_name(user input) and $dissapprove (form name)
   * inserting to set status if disspproved
   *
  */
  function insertStatus($tv_name, $Approve){
     require ("dbconnection.php");
     $sqlinsert=" INSERT INTO `tvstatus`(`tvstation_name`, `tvstatus`) VALUES ('$tv_name','$Approve')";
     $resultinsert= $conn->query($sqlinsert);
     if($resultinsert === TRUE){
       echo "<script>
       alert('TV STATION APPROVED!!');
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
   function update($tv_name, $Approve){
     require ("dbconnection.php");
     $sqlupdates="UPDATE `tvstatus` SET `tvstatus`='$Approve' WHERE tvstation_name= '$tv_name' ";
     $sqlupdateresult=$conn->query($sqlupdates);
     if($sqlupdateresult){
       echo "<script>
       alert('TV STATION APPROVED!!');
       </script>";
       }
     else{
       echo "<script>
       alert('Could not approve tv station');
       </script>";}
    }

    /*
    * Checking if TV name Exist
    * if exist, update status
    * Else , insert tv name and status disapprove
    */
    require ("dbconnection.php");
    $sqlcheckstatus="SELECT `tvstation_name`, `tvstatus` FROM `tvstatus` WHERE  tvstation_name= '$tv_name' ";
    $sqlcheckresult=$conn->query($sqlcheckstatus);
    if($sqlcheckresult-> num_rows > 0){
      update($tv_name, $Approve);
    }
    else {
    insertStatus($tv_name, $Approve);}
  

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
  $tv_name=$_GET['tv_name'];
  $disapprove= 2;
  $Approve= 1;

  /*
   *Function 
   * @param  $tv_name(user input) and $dissapprove (form name)
   * inserting to set status if disspproved
   *
  */
  function insertStatus($tv_name, $disapprove){
     require ("dbconnection.php");
     $sqlinsert=" INSERT INTO `tvstatus`(`tvstation_name`, `tvstatus`) VALUES ('$tv_name','$disapprove')";
     $resultinsert= $conn->query($sqlinsert);
     if($resultinsert === TRUE){
       echo "<script>
       alert('TV STATION DISAPPROVED!!');
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
   function update($tv_name, $disapprove){
     require ("dbconnection.php");
     $sqlupdates="UPDATE `tvstatus` SET `tvstatus`='$disapprove' WHERE tvstation_name= '$tv_name' ";
     $sqlupdateresult=$conn->query($sqlupdates);
     if($sqlupdateresult){
       echo "<script>
       alert('TV STATION DISAPPROVED!!');
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
    $sqlcheckstatus="SELECT `tvstation_name`, `tvstatus` FROM `tvstatus` WHERE  tvstation_name= '$tv_name' ";
    $sqlcheckresult=$conn->query($sqlcheckstatus);
    if($sqlcheckresult-> num_rows > 0){
      update($tv_name, $disapprove);
    }
    else {
    insertStatus($tv_name, $disapprove);}
  

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

    <title>Television Approval Page</title>
  </head>
  <body>
    <h4 style= "margin-left:20%; margin-top: 3%;">Pending List of Registered Television Station</h4><br>
    <!-- Form to allow you to see approve and disapprove Tv stations -->
    <form style="float:right; padding-top: 20px;">
      <label>View</label><br>
      <div style="display:inline;" >
      <input type="radio"  name="status" value="0"><span>Pending</span><br>
      <input type="radio"  name="status" value="1"><span>Approve</span> <br>
      <input type="radio"  name="status" value="2"><span>Disaprove</span><br>
</div>
      <input type="submit"  value = 'Apply' class="signupbtn" name="Apply">
      <input type="submit"  value = 'View all TV Station' class="signupbtn" name="view_all">
   
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Television Name</th>
      <th scope="col">Location</th>
      <th scope="col">Ownership Type</th>
      <th scope="col">View Type</th>
      <th scope="col">Owner</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Approve</th>
      <th scope="col">Disapprove</th>

    </tr>
  </thead>
  <tbody>

    <?php
    /*
    *This file allows and admin to view dispproved and approved Tv stations
    * Used status to a number to enable approve and disapprove , pending
    *@Approve =1 @dispprove=2 @pending=0

    */
        //requiring database connection
        require ("dbconnection.php");
        if(isset($_GET['Apply'])){
          $status=$_GET['status'];
          if($status === '0'){
            echo "<h3> This is the list of the pending TV STATIONS</h3>";
          }
          else if($status === '1'){
            echo "<h3> This is the list of the <b>APPROVED<b> TV STATIONS</h3>";
          }
          else {
            echo "<h3> This is the list of the <b>DISAPPROVED</b> TV STATIONS</h3>";
          }
          $sqlstatus="SELECT television_stations.tvstation_id , television_stations.tvstation_name, 
          location, ownership_type, viewtype, ceo_name, email, contact, tvstatus.tvstatus
           FROM television_stations, tvstatus where television_stations.tvstation_name=tvstatus.tvstation_name
            and tvstatus.tvstatus= '$status'";
            $resultstatus=$conn->query($sqlstatus);
            if ($resultstatus->num_rows > 0) {
            while($row = $resultstatus->fetch_assoc()) {
             $tvname = $row['tvstation_name'];
             $location=$row['location'];
             $Ownership_type = $row['ownership_type'];
             $View_type=$row['viewtype'];
             $Owner = $row['ceo_name'];
             $Email =$row ['email'];
             $Contact = $row['contact'];
             $stationid = $row['tvstation_id'];
             Insert($tvname,$location,$Ownership_type,$View_type,$Owner,$Email,$Contact,$stationid);
             }
            }
             else{
               echo "result 0";
             }
          
        }else{
         $selectSql="SELECT   `tvstation_id` , `tvstation_name`, `location`, `ownership_type`,
         `viewtype`, `ceo_name`, `email`, `contact` FROM `television_stations`";
         $resultSelect=$conn->query($selectSql);
         if ($resultSelect->num_rows > 0) {
            // output data of each row
           while($row = $resultSelect->fetch_assoc()) {
            $tvname = $row['tvstation_name'];
            $location=$row['location'];
            $Ownership_type = $row['ownership_type'];
            $View_type=$row['viewtype'];
            $Owner = $row['ceo_name'];
            $Email =$row ['email'];
            $Contact = $row['contact'];
            $stationid = $row['tvstation_id'];
            Insert($tvname,$location,$Ownership_type,$View_type,$Owner,$Email,$Contact,$stationid);
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
 
 ?>