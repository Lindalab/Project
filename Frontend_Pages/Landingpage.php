<!DOCTYPE html>
  <html lang= "en">
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="landingpage.css">
       <title>Index Page</title>
         <meta charset="utf-8">
    <head>
      <body>
        <div id="MainContainer">
          <header>
            <nav>
             <!-- Logo of Organisation -->
            <img src="../Images/CoastArm.png " alt=" Logo Ghana" width="50" height= "50">
            <img src="../Images/NewNCA.jpg " alt="Logo NCA" width="50" height= "50">
              <!-- Logoin as Admin button -->
            <a id="b1" href="Login.php"><button type="button" id="B1" class="btn btn-info">Login As Admin</button></a>
          </nav>
        </header><br><br>
        <!-- Varoius card displaying major elements on the page -->
        <div class= "container">
         <div class="card-group">
           <div class="card">
             <img src="../Images/TV.jpg" class="card-img-top" alt="..." height="300">
             <div class="card-body">
               <a href=" ..\Backend\ApprovedTV.php" ><h5 class="card-title">Television Stations</h5></a>
              </div>
            </div>
            <div class="card">
              <img src="../Images/Programs.jpg" class="card-img-top" alt="..." height="300">
              <div class="card-body">
                <a href="..\Backend\ApprovePrograms.php"><h5 class="card-title">Television Programs</h5></a>
              </div>
            </div>
            <div class="card">
              <img src="../Images/Sponsor.jpg" class="card-img-top" alt="..." height="300">
              <div class="card-body">
                <a href="..\Backend\Sponsor.php"><h5 class="card-title">Program Sponsors</h5></a>
              </div>
            </div>
          </div>
          <!-- Register buttons -->
          <a id="b2" href="RegisterTV.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><sapn>Register TV</span></a>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Register Program
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="RegisterProgram.php">Register with Old Sponsor</a>
              <a class="dropdown-item" href="RegisterProgram2.php">Register with New Sponsor</a>
            </div>
          </div>
        </div>  
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
  </html>