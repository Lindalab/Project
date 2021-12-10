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
          <form  method= "post" action="..\Backend\insertProg2.php" style="border:1px solid #ccc; height: 1200px;">
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
                 <input type="text" placeholder="Duration" name="prduration"  required><br>

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

                 <!-- Adding a new Sponsor -->
                 <label for="spname"><b>Sponsor Name</b></label><br>
                <input type="text" placeholder="Sponsor name" name="spname" required><br>

                <p> Select Sponsor type</p>
                 <input type="radio"  name="sponsor_type" value="Company"><span>Comapny</span> <br>
                 <input type="radio"  name="sponsor_type" value="Individual"><span>Individual</span><br>
                 

                <label for="spcontact"><b> Sponsor Contact</b></label><br>
                <input type="text" placeholder="Sponsor Contact" name="spcontact" pattern="[0-9]{10}"
                 title="only 11 numbers are expected" required><br>
                     <!-- Email input  -->
                 <label for="spemail"><b>Sponsor Email</b></label><br>
                 <input type="text" placeholder="Sponsor Email" name="spemail"
                 pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                 title="Must contain at least a number, an uppercase a lowercase, and at least 8 or more characters"
                  required><br>
                      <!-- Location  input  -->
                 <label for="spaddress"><b>Sponsor Address</b></label><br>
                 <input type="text" placeholder="Sponsor Address" name="spaddress" required><br>

                <input type="submit" class="signupbtn" name="Submit" value = "Submit">
  
                          
                 
                
                </div>
            </form>
          </div>
      </body>
  </html>