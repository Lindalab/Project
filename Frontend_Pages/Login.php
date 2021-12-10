<!DOCTYPE html>
  <html lang= "en">
    <head>
      <!-- Css style sheet -->
    <link rel="stylesheet" href="loginstyle.css">
       <title>Login</title>
         <meta charset="utf-8">


    <head>
      <body style = "background-color: #44355B;">
          
          <div class="Form1">
            <!-- FORM FOR ADMIN LOGIN -->
            <form  method="post" action="..\Backend\ValidateLogin.php">
              <div class="Topic">
                  <h2 id="Topic">Login</h2>
                  <p> Fill to Login as an Admin</p>
              </div>
                  
                 <div class="container">
                   <!-- Email input  -->
                 <label for="email"><b>Email</b></label><br>
                 <input type="text" placeholder="Enter Email" name="email" required><br>
                     <!-- Password input -->
                  <label for="psw"><b>Password</b></label><br>
                  <input type="password" placeholder="Enter Password" name="psw" required><br>
                        <!-- Submit button -->
                  <button  type="submit" id="Log"  name= "LoginSubmit" > Submit</button><br>
                 
  
                  </div>
            </form>
          </div>
      </body>
  </html>