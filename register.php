<?php include('connect.php'); ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <ink rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body>
        <div class="form-box">
            <div class="header-text">
                Registration Form
            </div>
            <form method="post" action="register.php">
            <input placeholder="Your Name" type="text" name="name" required/>
            <input placeholder="Your Email Address" type="email" name="email" required/>
             <input placeholder="Your Password" type="password" name="password" required/> 
             <input placeholder="Confirm Password" type="password" name="password1" required/>
             <input placeholder="Contact No" type="number" name="number" required/>
              <button>Register</button>
              </form>
              <p>Already Registered?<a href="login.php">Login</a></p>
        </div>
    </body>
    </html>
    
	
