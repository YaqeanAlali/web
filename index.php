 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">

    
    <title>Log in</title>

 </head>

 <body>
    <div class="main">
       <h1 >Log in </h1>
       <h3 id="h" ><sup>with SQL</sup></h3><br> 
       <form action="login.php" method="POST">
       <?php if (isset($user_error))
                echo $user_error;
            ?>
       <input type="text" name="username" id="username" placeholder="username"><br>
       <?php if (isset($pass_error))
                echo $pass_error;
            ?>
       <input type="password" name="password" id="password" placeholder="password"><br>
       
       <input type="submit" name="submit" id="submit" value="Log in ">
       
       <h3 id="or"  >Or</h3>
       <a id="swap" href="register.php">Register</a>
       </form>
    </div>
 </body>

 </html>