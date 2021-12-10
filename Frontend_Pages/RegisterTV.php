<!DOCTYPE html>
  <html lang= "en">
    <head>
    <link rel="stylesheet" href="registertvstyle.css">
       <title>Register Television Station</title>
         <meta charset="utf-8">


    <head>
      <body>
          
          <div class="Form1">
             <!-- A form to allow individuals to register their television stations -->
          <form  method= "post" action="..\Backend\insertTV.php" style="border:1px solid #ccc">
             <div class="container">
                 <div class="Topic">
                    <h1>Television Registeration Form</h1>
                </div>

                <label for="name"><b>Television Station Name</b></label><br>
                <input type="text" placeholder="Enter TV name" name="name" required><br>
                     <!-- Email input  -->
                 <label for="email"><b>Email</b></label><br>
                 <input type="text" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                 title="Must contain at least one  number , a lowercase letter, and at least 8 or more characters"
                 name="email" required><br>
                      <!-- Location  input  -->
                 <label for="location"><b>Location</b></label><br>
                 <input type="text" placeholder="Location"
                 name="location" required><br>

                 <label for="ceo"><b>CEO Name</b></label><br>
                 <input type="text" placeholder="Ceo Name" name="ceo" required><br>

                 <label for="contact"><b>Contact</b></label><br>
                 <input type="text" placeholder="Contact" name="contact"  pattern="[0-9]{10}"
                 title="only 11 numbers are expected" required><br>

                 <label for="year"><b>Year Established</b></label><br>
                 <input type="date" placeholder="year established " name="year" required><br>

                 <!-- Radio Buttion for opeartion type -->
                 <p>Select to operation type</p>
                 <input type="radio"  name="view_type" value="Pay to view"><span>Pay to view</span> <br>
                 <input type="radio"  name="view_type" value="Free to view"><span>Free to view</span><br>

                   <!-- Radio Buttion for ownership type -->
                 <p>Select to ownership type </p>
                 <input type="radio"  name="ownership_type" value="Private"><span>private</span> <br>
                 <input type="radio"  name="ownership_type" value="Public"><span>public</span><br>


                 <input type="submit"  value = 'submit' class="signupbtn" name="Submit">


      
                 
            
             </div>
            </form>
          </div>
      </body>
  </html>
