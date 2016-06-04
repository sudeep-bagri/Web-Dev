<?php
 session_start();
 require_once 'Core/init.php';

if(isset($_POST['btn-login']))
 {
  $user_email = trim($_POST['user_email']);
  $user_password = trim($_POST['password']);
  

    

  
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
   $stmt->execute(array(":email"=>$user_email));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   
   if($row['user_password']==$user_password){
    
    echo "ok"; // log in
       header("Location: index.php");
    $_SESSION['user_session'] = $row['user_id'];
   }
   else{
    
    echo "email or password does not exist."; // wrong details 
   }
    
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }
 }

?>


<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        
        
        <title>Login</title>
        <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>



        <link rel="stylesheet" href="css/reset.css">

        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/login.css">




    </head>
    

    <body background="images/pic2.jpg">
        
         
       
     

        <form name = "login-form" action = "login.php" method = "POST" class = "login" id = "login-form">
            

            <fieldset>

                <legend class="legend">Login</legend>
                
                  <div id="error">
        <!-- error will be shown here ! -->
        </div>

                <div class="input">
                    <input type="e-mail" name = "user_email" placeholder="E-mail" id = "user_email" />
                    <span><i class="fa fa-envelope-o"></i></span>
                    <span id="check-e"></span>
                </div>

                <div class="input">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                    <span><i class="fa fa-lock"></i></span>
                </div>
                
                

                <button type="submit" class="submit" name="btn-login" id="btn-login"><i class="fa fa-long-arrow-right"></i></button>
                
                
            </fieldset>

            <div class="feedback">
                login successful <br />
                redirecting...
            </div>

       <div class="notuser">
           <a href="register.php">Register Here</a>
            
            </div>

        
        </form>
        
        
                     


    </body>
</html>
