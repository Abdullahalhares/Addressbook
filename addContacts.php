<?php
   session_start();
   include 'contactsubmit.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AddContact page</title>

    <link href="css/styleadd.css" rel="stylesheet">
  </head>
  <body>
     <div class="bar" >
     
        <div class="headbar">
           
           <ul class="headmenu">
          <a class="navbar-brand" href="contacts.php">Address Book</a>
          <li><a href="logOut.php">Log Out</a></li>
          <!--<li><a href="importContact.php">Import Contact</a></li>
          <li><a href="exportContact.php">Export Contact</a></li>-->
          <li><a href="addContacts.php">Add Contact</a></li>
          </ul>
        
        </div>
     </div>
     <div class="container">
        <div class="reg" >
            <form  method="post" >
                <label for="name">Name</label>
                <input class="reg_in" type="text" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span><br>
                <label for="address"> Address</label>
                <input class="reg_in" type="text" name="address" value="<?php echo $address;?>">
                <span class="error">* <?php echo $addressErr;?></span><br>
                <label for="email">Email</label>
                <input class="reg_in" type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span><br>
                <label for="Phone No">Phone No</label>
                <input class="reg_in" type="text" name="phoneNo" value="<?php echo $phoneNo;?>">
                <span class="error">* <?php echo $phoneNo;?></span><br>
                <input class="reg_in" type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div> 
  </body>

</html>    