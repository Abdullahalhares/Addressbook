
<?

    include 'login.php';
    
?>
<!Doctype html>
<html>
<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
      


     <div class="header">
        
        <form method="post"  >
                 
            Email:<input class="header_in" type="text" name="logemail" value="<?php echo addslashes($_POST['email']); ?>" />
            
            password:<input class="header_in" type="password" name="logpassword" value="<?php echo addslashes($_POST['password']); ?>" />
           <input class="header_in" type="submit" name="submit" value="Log In"  />
        </form>
    </div>   
    <div class="container">
        <div class="reg" >
            <form  method="post" >
                <label for="username">Username</label>
                <input class="reg_in" type="text" name="username" value="<?php echo $username;?>">
                <span class="error">* <?php echo $usernameErr;?></span><br>
                <label for="name"> Name</label>
                <input class="reg_in" type="text" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span><br>
                <label for="email">email</label>
                <input class="reg_in" type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span><br>
                <label for="password">password</label>
                <input class="reg_in" type="password" name="password" value="<?php echo $password;?>">
                <span class="error">* <?php echo $passwordErr;?></span><br>
                <input class="reg_in" type="submit" name="submit" value="Sign Up">

            </form>
        </div>
    </div> 
</body>    
</html>