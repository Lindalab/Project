

<?php
/*
*Display Regisered Tv that has been approved
* Uses select statment to echo table with the desired out put
* Using the Tvstatus table with a status of 1 
*Table display bootstrap table format
*/

//Requiring database connection 
require ("dbconnection.php");

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';

// Select statment to select the approved TV's from the Database
$sqlselect="select tvstatus.tvstation_name ,television_stations.location,television_stations.ownership_type,
television_stations.viewtype,television_stations.ceo_name,television_stations.email,television_stations.contact
from television_stations,tvstatus 
where television_stations.tvstation_name=tvstatus.tvstation_name 
and tvstatus.tvstatus=1";
$resultselect=$conn->query($sqlselect);
//Returning the select result in a table form
if($resultselect->num_rows > 0){
    echo '<h3 style="margin-top: 5%; text-align:center;">LIST OF AUTHORISED  TV STATIONS IN GHANA </h3> ';
    echo '<table class="table table-striped">';
    echo '<thead class="bg-primary">';
    echo '<tr>';
        echo '<th scope="col">Television Station</th>';
        echo '<th scope="col">Location</th>';
        echo '<th scope="col">Ownership Type</th>';
        echo '<th scope="col">View Type</th>';
        echo '<th scope="col">Owner</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Conatct</th>';
     echo' </tr>';
    echo '</thead>';
    while($row = $resultselect->fetch_assoc()){
        echo '<tbody>';
            echo '<tr>';
                echo '<th scope="row">'.$row['tvstation_name'].'</th>';
                echo '<td>'.$row['location'].'</td>';
                echo '<td>'.$row['ownership_type'].'</td>';
                echo '<td>'.$row['viewtype'].'</td>';
                echo '<td>'.$row['ceo_name'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['contact'].'</td>';
            echo '</tr>';
        echo '</tbody>';
    }
    echo ' </table>';
}
else{
    echo 'Nothing has been approved';
}

