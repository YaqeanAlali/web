<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    
<!--************************************************************************-->

    <title>Register </title>
</head>

<body>

    <div class="main">
       <div class="enternal">
        <h1 >Register</h1>
       <h3 id="h" ><sup>with SQL</sup></h3><br> 
        
        <form action="register_post.php" method="POST">

        <?php if (isset($num_rows_error))
            echo $num_rows_error;
            ?>
            <?php if (isset($user_error))
                echo $user_error;
            ?>
            <input type="text" name="username" id="username" placeholder="username"><br>
            <?php if (isset($email_error))
                echo $email_error;
            ?>
            <input type="email" name="email" id="email" placeholder="email"><br>
            <?php if (isset($pass_error))
                echo $pass_error;
            ?>
            <input type="password" name="password" id="password" placeholder="password"><br>
            <input type="submit" name="submit" id="submit" value=" Register "><br>
            <h3 id="or" >Or</h3>
            <a id='swap' href="index.php">Log in</a>
        </form>
        </div>
    </div>
</body>

</html>