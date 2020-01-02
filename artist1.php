<DOCTYPE html>
	<head><!-- 
		<link rel="stylesheet" href="\bootstrap.min.css" type="text\css"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	</head>
	<style>
		 .nav-link{
      float:right;
    }
    		body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("bg2.jpg");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
	</style>
	<!-- <body>
		<div class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i>  Home</a> 
  
  <a href="#"><i class="fa fa-shopping-cart"></i> Cart</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
</div> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav text-right ">
      <li class="nav-item active">
        <a class="nav-link" href="/purple/purpleribbonarts.weebly.com/index.html">Home  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a>

      </li>
       <li class="nav-item">
        <a class="nav-link" href="new1.php">LogOut <i class="fas fa-user"></i></a>
      </li>
      
      
    </ul>
  </div>
</nav>  
		<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.html">Cart</a>
      </li>
      
      
    </ul>
  </div>
</nav>   -->
	<div class="bg-image"></div>

<div class="bg-text">
<?php
include("con3.php");
ob_start();
session_start();
   error_reporting(0);
	 $query1="Select a_name from artist";
	 
	$result=mysqli_query($db,$query1);
	$count = mysqli_num_rows($result);
	 if($count>=1)
	  {    
			echo "\n CURRENTLY AVAILABLE ARISTS ARE:"."<br>";
		  while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {
			  $var=$row["a_name"];
			  
			  echo "$var"."<br>";
			  
			  
		

			
		  }
		  echo "<br>";
		  echo "ENTER ARTIST NAME:";
	    
	  }
	  
	  else{
		  echo"<B>No results found</B>";
	  }
		  if(!$result)
	  {
		  die('Query failed'.mysqli_error());
	  } 
	  $count = mysqli_num_rows($result);
	 
	  
	  
	  
	  ?>
	  <form action="purch.php" method="post">
    <input type="text" value="<?php echo $var?>" name="var" />
    <input type="submit" value="Send" />
	 	 

</div>
	  
</form>
</body>
</html>