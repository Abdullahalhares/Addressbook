<?php

  session_start();
  include 'connection.php';

  $username=$name=$email=$password=$logemail=$logpassword="";
  $usernameErr=$nameErr=$emailErr=$passwordErr="";

 

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if($_POST['submit']=='Sign Up'){
     
      if(!$_POST['name']){
          $nameErr="submit your name";
      }else{
           $name=test_input($_POST['name']);
      }
      if(!$_POST['email']){
        $emailErr="submit your email";
      }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
          
             $emailErr="submit valid email";
      }
           else{
              $email=test_input($_POST['email']); 
           }
      
       if(!$_POST["password"]){
            $passwordErr="enter your password";
         }else{ 
             if(strlen($_POST["password"])<8){
                 $passwordErr="password length is too short";
             }
            else if(!preg_match('`[A-Z]`',$_POST["password"])){
                $passwordErr=" enter atleast a capital letter"; 
             }else{
                 $password=test_input($_POST['password']);
             }
         } 

          //username validation

      if(!$_POST['username']){
          $usernameErr="submit your username";
      }else{
          $username=test_input($_POST['username']);
           
          $query="select * from user where username='$username'";
          $result=mysqli_query($link,$query);
          $results=mysqli_num_rows($result);   
          
          if($results){
               $usernameErr= "username already registered";
          }else{
             
              $query="insert into `user` (`username`,`name`,`email`,`password`) values ('$username','$name','$email','$password')";
              mysqli_query($link,$query);

              $_SESSION['id']=mysqli_insert_id($link);
              header('Location: contacts.php');
             // print_r($_SESSION);
              
          }
          
      }
       
    }
  }
 

  if($_POST['submit']=='Log In'){
     if($_POST['logpassword']){
         $logpassword=test_input($_POST['logpassword']);
     }
     if($_POST['logemail']){
         $logemail=test_input($_POST['logemail']);
     }
      $query="select * from user where email='$logemail' and password='$logpassword' LIMIT 1";
     
      $result=mysqli_query($link,$query);
      $row=mysqli_fetch_array($result);

     if($row){
         $_SESSION['id']=$row['id'];
        header('Location: contacts.php');
     }else{
         echo "didn't match";
     }
     
  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>