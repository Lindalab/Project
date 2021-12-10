<!DOCTYPE html>
  <html lang= "en">
    <head>
    <link rel="stylesheet" href="registertvstyle.css">
       <title>Register Programs</title>
         <meta charset="utf-8">


    <head>
      <body>
          
          <div class="Form1">
             <!-- A form to allow individuals to register their programs stations -->
          <form  method= "post" action="..\Backend\insertProgram.php" style="border:1px solid #ccc; height: 800px;">
             <div class="container">
                 <div class="Topic">
                    <h1>Program Registeration Form</h1>
                </div>

                <label for="prname"><b>Program Name</b></label><br>
                 <input type="text" placeholder="Enter TV name" name="prname" required><br>
                     <!-- Email input  -->
                 <label for="prtime"><b>Program Time</b></label><br>
                 <input type="time" placeholder="Enter Email" name="prtime" required><br>
                      <!-- Location  input  -->
                 <label for="prduration"><b>Program duration</b></label><br>
                 <input type="text" placeholder="Duration" name="prduration" required><br>

                 <label for="prdays"><b>Days showed</b></label><br>
                 <input type="text" placeholder="Show Days" name="prdays"  required><br>

                 <label for="stationid"><b>Television Station ID</b></label><br>
                 <input type="number" placeholder=" Tv ID" name="stationid" required><br>

                 <label for="producerid"><b>Producer ID</b></label><br>
                 <input type="number" placeholder="Producer ID" name="producerid" required><br>

                 <!-- Radio Buttion for opeartion type -->
                 <p> Select Program type</p>
                 <input type="radio"  name="program_type" value="Movie"><span>Movie</span> <br>
                 <input type="radio"  name="program_type" value="News"><span>News</span><br>
                 <input type="radio"  name="program_type" value="Reality_show"><span>Reality Show</span><br>

                 <label for="sponid"><b>Sponsor ID</b></label><br>
                 <input type="number" placeholder="Sponsor ID" name="sponid" required><br>

                 <input type="submit" class="signupbtn" name="Submit" value = "Submit">
  
                          
                 
                
                </div>
            </form>
          </div>
      </body>
  </html>