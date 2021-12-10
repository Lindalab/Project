


<?php
/*
*Display Regisered Programs that has been approved
* Uses select statment to echo table with the desired output
* Using the Programstatus table with a status of 1 
*Table display bootstrap table format
*/

//Requiring database connection 
require ("dbconnection.php");

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';

//Select statment to retive approved programs
$sqlselect="select programstatus.program_name,programs.program_time,programs.program_daysshowed,
television_stations.tvstation_name,producer.fname,producer.lname, sponsors.sponsor_name 
from programstatus,programs,television_stations,producer,sponsors 
where programstatus.program_name=programs.program_name 
and programs.tvstation_id=television_stations.tvstation_id 
and programs.producer_id = producer.producer_id 
and programs.sponsor_id = sponsors.sponsor_id 
and programstatus.programstatus=1;";
$resultselect=$conn->query($sqlselect);
// Using if statemet to echo the result in table form
if($resultselect->num_rows > 0){
    echo '<h3 style="margin-top: 5%; text-align:center;" >LIST OF AUTHORISED PROGRAMS AND TV STATIONS</h3> ';
    echo '<table class="table table-striped">';
    echo '<thead class="bg-success">';
    echo '<tr>';
        echo '<th scope="col">Program Name</th>';
        echo '<th scope="col">Program Time</th>';
        echo '<th scope="col">Day showed</th>';
        echo '<th scope="col">Television Stataion</th>';
        echo '<th scope="col">Producer </th>';
        echo '<th scope="col">Sponsor</th>';
        
     echo' </tr>';
    echo '</thead>';
    while($row = $resultselect->fetch_assoc()){
        echo '<tbody>';
            echo '<tr>';
                echo '<th scope="row">'.$row['program_name'].'</th>';
                echo '<td>'.$row['program_time'].'</td>';
                echo '<td>'.$row['program_daysshowed'].'</td>';
                echo '<td>'.$row['tvstation_name'].'</td>';
                echo '<td>'.$row['fname']." ".$row['lname'].'</td>';
                echo '<td>'.$row['sponsor_name'].'</td>';
                
            echo '</tr>';
        echo '</tbody>';
    }
    echo ' </table>';
}

