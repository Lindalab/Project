<?php
/*
*File contains 2 functions for seting up table with buttion 
* For approval and disapproval of registered programs and Tv stations
* Insert functions
*  @param  $tvname,$location,$Ownership_type,$View_type,$Owner,$Email,$Contact
* Two form button  @Approve  @ Disapprove
* InsertProg function
*@param  $prname,$prtype,$prdays,$prtime,$tvstation,$prspon,$prduration,$prducer
* Two form button for  @Program Approve @ Program Disapprove
*
*/


function Insert($tvname,$location,$Ownership_type,$View_type,$Owner,$Email,$Contact){
    echo "
    
    <tbody>
    <tr>
      <th scope='row'>$tvname</th>
      <td>$location</td>
      <td>$Ownership_type</td>
      <td>$View_type</td>
      <td>$Owner</td>
      <td>$Email</td>
      <td>$Contact</td>
      
      <td>
      <form action='Registrationpage.php'>
      <input type = 'hidden' value = '$tvname' name = 'name'>
      <input type='submit' name= 'Approve' class='btn btn-success' value = 'Approve'>
      </form>
      </td>
      
      <td>
      <form action='Registrationpage.php'>
      <input type = 'hidden' value = '$tvname' name = 'tv_name' >
      <input type='submit' name= 'Disapprove' class='btn btn-danger' value= 'Disapprove'>
      </form>
      </td>
    
    </tr>

  </tbody>
    
    
";
}

function InsertProg($prname,$prtype,$prdays,$prtime,$tvstation,$prspon,$prduration,$prducer){
  echo "
  
  <tbody>
  <tr>
    <th scope='row'>$prname</th>
    <td>$prtype</td>
    <td>$prdays</td>
    <td>$prtime</td>
    <td>$tvstation</td>
    <td>$prspon</td>
    <td>$prduration</td>
    <td>$prducer</td>
    
    <td>
    <form action='RegistrationProgram.php' >
    <input type = 'hidden' value = '$prname' name = 'proname'>
    <input type='submit' name= 'Approve' class='btn btn-success' value = 'Approve'>
    </form>
    </td>
    
    <td>
    <form action='RegistrationProgram.php'>
    <input type = 'hidden' value = '$prname' name = 'prname' >
    <input type='submit' name= 'Disapprove' class='btn btn-danger' value= 'Disapprove'>
    </form>
    </td>
  
  </tr>

</tbody>
  
  
";
}
 
   
?>