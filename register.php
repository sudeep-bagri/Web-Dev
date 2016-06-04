<?php
require_once 'Core/init.php';

if($_POST)
 {
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  $joining_date =date('Y-m-d H:i:s');
  
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
   $stmt->execute(array(":email"=>$user_email));
   $count = $stmt->rowCount();
   
   if($count==0){
    
   $stmt = $db_con->prepare("INSERT INTO tbl_users(user_name,user_email,user_password,joining_date) VALUES(:uname, :email, :pass, :jdate)");
   $stmt->bindParam(":uname",$user_name);
   $stmt->bindParam(":email",$user_email);
   $stmt->bindParam(":pass",$user_password);
   $stmt->bindParam(":jdate",$joining_date);
     
    if($stmt->execute())
    {
    header("Location: login.php");
        exit;
 
    }
    else
    {
     echo "Query could not execute !";
    }
   
   }
   else{
    
    echo "1"; //  not available
   }
    
  }
  catch(PDOException $e){
       echo $e->getMessage();
  }
 }

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>

<script type="text/javascript" src="script.js"></script>    
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


    
    <link rel="stylesheet" href="css/reset.css">

    <script src="https://use.fontawesome.com/7eafa93061.js"></script>

        <link rel="stylesheet" href="css/login.css">
</head>
 <body background="images/pic2.jpg">
      
     
      
    <form action = "register.php" method = "post" class= "login" id='register-form'>
  
      
        
  <fieldset>
    
  	<legend class="legend">Register</legend>
      
      
    
    <div class="input">
    	<input type="text" name="user_name" placeholder="User or E-mail" id="user_name"/>
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
      <div class="input">
        <input type="email" placeholder="Email address" name="user_email" id="user_email" />
        <span id= "check-e"></span>
        </div>
      
    <div class="input">
    	<input type = "password" name= "user_password" id = "user_password" >
      <span><i class="fa fa-lock"></i></span>
    </div>
      
      <div class="input">
    	<input type = "password" name= "cpassword" id = "cpassword" >
      <span><i class="fa fa-lock"></i></span>
    </div>
      
     
      <div class="input">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
   </button> 
    
  </fieldset>
    
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>