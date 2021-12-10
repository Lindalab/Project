<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Page</title>
    <style>
      body{
        background-color: lightblue;
      }

      nav{
    margin-top: 40px;
    margin-left: 10%;
}
nav img{
    margin-right: 10px;
}

        #t1{
           margin-left: -5%;
           margin-top: 10%;
           text-align:center;
        }

        #B1{
            margin-left: 20%;
            margin-top: 3%;
            border-radius:25px;
        }

        #B2{
            margin-left: 50%;
            margin-top: -10%;
            border-radius:25px;
        }

        a{
            text-decoration:none;
            color:white;
        }

        h5{
          text-align: center;
          padding-top: 10%;
        }

        #Logout{
          margin-left: 80%;
          margin-top: 10%; 
        }
        </style>
  </head>
  <body>

  <nav>
             <!-- Logo of Organisation -->
            <img src="../Images/CoastArm.png " alt=" Logo Ghana" width="50" height= "50">
            <img src="../Images/NewNCA.jpg " alt="Logo NCA" width="50" height= "50">
              
          </nav>

      <h4 id="t1" >Get Started with one of the options below</h4>

  <div class="card text-white bg-info mb-3" id= "B1" style="max-width: 18rem; height:150px;">
  <a href="..\Backend\Registrationpage.php">
  <div class="card-body">
    <h5 class="card-title" >Go to Television Stations List</h5>
  </div>
    </a>
</div>
<div class="card text-white bg-secondary mb-3" id= "B2" style="max-width: 18rem; height:150px;">
<a href="..\Backend\RegistrationProgram.php">
  <div class="card-body">
    <h5 class="card-title">Go to Programs List</h5>
  </div>
    </a>
</div>


<a href="Landingpage.php"  id="Logout" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">LOGOUT</a>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>