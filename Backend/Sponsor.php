<?php

/*
*Display Sponsors, the program they sponsor, tv station and info about sponsors  
* Uses select statment to echo table with the desired out put
* 
*Table display bootstrap table format
*/

// Requiring database connection
require ("dbconnection.php");
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';

$sqlsponsor="select programs.program_name ,television_stations.tvstation_name, sponsors.sponsor_name, 
sponsors.sponsor_contact,sponsors.sponsor_email,sponsors.sponsor_type
from programs,television_stations,sponsors,tvstatus
where programs.sponsor_id=sponsors.sponsor_id
and programs.tvstation_id=television_stations.tvstation_id
and television_stations.tvstation_name=tvstatus.tvstation_name
and tvstatus=1";
$resultsponsor= $conn->query($sqlsponsor);
if($resultsponsor->num_rows >0){
    echo '<h3 style="margin-top: 5%; text-align:center;">LIST OF SPONSORS AND CONTACT INFO<h3>';
    echo '<table class="table table-striped">';
    echo '<thead class="bg-success">';
    echo '<tr>';
        echo '<th scope="col">Program</th>';
        echo '<th scope="col">Television Station</th>';
        echo '<th scope="col">Sponsor</th>';
        echo '<th scope="col">Sponsor Contact</th>';
        echo '<th scope="col">Sponsor Email</th>';
        echo '<th scope="col">Type of Sponsor</th>';
     echo' </tr>';
    echo '</thead>';
    while($row=$resultsponsor->fetch_assoc()){
        echo '<tbody>';
            echo '<tr>';
                echo '<th scope="row">'.$row['program_name'].'</th>';
                echo '<td>'.$row['tvstation_name'].'</td>';
                echo '<td>'.$row['sponsor_name'].'</td>';
                echo '<td>'.$row['sponsor_contact'].'</td>';
                echo '<td>'.$row['sponsor_email'].'</td>';
                echo '<td>'.$row['sponsor_type'].'</td>';
            echo '</tr>';
        echo '</tbody>';

    }
}
else{
    echo 'Sponsors are not available';
}

?>
