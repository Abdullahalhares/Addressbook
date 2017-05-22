<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact page</title>

    <link href="css/stylecon.css" rel="stylesheet">
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
     <div class="containar">
         
             <form method="post" action="search.php">
                <input class="search" type="text" name="search" placeholder="Search your contact..">
                
              </form>
        

     </div>
  </body>

</html>    