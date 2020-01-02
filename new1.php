<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Art gallery</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="style1.css">
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav text-right ">
      <li class="nav-item active">
        <a class="nav-link" href="purple\purpleribbonarts.weebly.com\index.html">Home  <span class="sr-only">(current)</span></a>
      </li>
     
      
      
    </ul>
  </div>
</nav>  
<?php
   include("con3.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   
      $myemail = $_POST['email'];
      $_SESSION["email"] = $myemail;
      $mypassword = $_POST['password'];
   
   
   if(!empty($myemail) && !empty($mypassword)) {
      
      $sql = "SELECT email FROM login WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
   
   if(!$result)
   {
    die('Query failed'.mysqli_error());
   }
 
     
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
  
      if($count == 1) {
           header("location: artist1.php");
 
   }
else{
    echo "email password type dont match";
   } 
   } 
else
echo "One or more fields are empty!";  
}
?>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign In</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="username" name="email">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="password">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="signup2.html">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>

 
<!-- <h1 style="color:#CD853F;"></h1> 
 <div class="contentColumn">
    
      <div class="contentMain"> 
            <h1>Enter Login Credentials</h1>
                <form action="" method="post">
  
 <br><br>
 email:<br>
 <input type="text" name="email">
 <br>
 password:<br>
 <input type="password" name="password"><br>
 <br>
 type:<br>
 <input type="text" name="usertype">
 <br>
 <br>

 <input type="submit" value="Submit">
 
</form>
     </div>
   


 </div>
 -->
             
</body>
</html>