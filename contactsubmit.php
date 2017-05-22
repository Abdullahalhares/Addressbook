<?php

  session_start();
  include 'connection.php';

  $name=$address=$email=$phoneNo="";
  $nameErr=$addressErr=$emailErr=$phoneNoErr="";

  if($_SERVER["REQUEST_METHOD"]=="POST"){
      if($_POST['submit']){
         if(!$_POST['name']){
             $nameErr="name required";
         }else{
             $name=test_input($_POST['name']);
         } 
         if(!$_POST['address']){
             $addressErr="address required";
         }else{
             $address=test_input($_POST['address']);
         }
         if(!$_POST['email']){
             $emailErr="email required";
         }else{
             $email=test_input($_POST['email']);
         }
         if(!$_POST['PhoneNo']){
             $phoneNoErr="Phone No required";
         }else{
             $phoneNo=test_input($_POST['PhoneNo']);
         }
          $email=test_input($_POST['username']);
           
          $query="select * from user where email='$email'";
          $result=mysqli_query($link,$query);
          
          $results=mysqli_num_rows($result); 
           $_SESSION['id']=mysqli_insert_id($link);
          $userId=$_SESSION['id'];
          echo "$userId";
          $query = "INSERT INTO address ( name, address, email, phoneNo,userid) VALUES ( '$name', '$address', '$email', '$phoneNo','$userId')";
          mysqli_query($link,$query);
          
      }

  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	
?>