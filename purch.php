<DOCTYPE html>
	<head><!-- 
		<link rel="stylesheet" href="\bootstrap.min.css" type="text\css"> -->
	<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<title>
			Purchase
		</title>
		<style>
			.card{
				display: inline-block;
        margin-left: 1%;
        margin-top: 2%;
}
.navbarNav{
  text-align: right;
}
#foot{
  text-align: center;
  background-color:   #C0C0C0;
  color: solid black;
}
.bg-img {
  /* The image used */
 /* background-image: url("bg3.jpg");*/

  /* Add the blur effect */
 

  /* Full height */

  /* Center and scale the image nicely */
  background-position: center;
  background-size: cover;
}
form{
  display:inline-flex;
}
img{
  height:200px;
}
    .nav-link{
      float:right;
    }
		</style>
  <?php
          include("con3.php");
    ob_start();
      session_start();
       error_reporting(0);
         if($_SERVER["REQUEST_METHOD"] == "GET"){
          $id1=$_GET['title'];
          
           $query3="SELECT * from `painting` where title='".$id1."'";
           $result2=mysqli_query($db,$query3);

           $res = $result2->fetch_row();
           
               $query2="INSERT INTO `purchase`(`paintname`,`email`,`price`) values ('".$id1."','".$_SESSION['email']."','".$res[4]."')";
        $result1=mysqli_query($db,$query2);
}
      ?>
  

  
	</head>
	<body>
    <!-- <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>
    </ul>
    
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav text-right ">
      <li class="nav-item active">
        <a class="nav-link" href="purple\purpleribbonarts.weebly.com\index.html"> Home  <span class="sr-only">(current)</span></a>
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
<div class="bg-img">

		<?php  
   if(isset($_POST['var']))
    $_SESSION['a_name'] = $_POST['var'];
    //echo $var;

    $query1="SELECT title,a_name,price FROM painting where a_name='".$_SESSION['a_name']."'";
    $result=mysqli_query($db,$query1);
    $count = mysqli_num_rows($result);
    
    for($i=1;$i<=$count;$i++)
    {
      $res=$result->fetch_row();
     
      $var2=$res[0];
      $var3=$res[2];
      $var1=$res[1];

echo "<form method='get'><div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='".$var2.".jpg' alt='".$var2."'>
  <div class='card-footer text-muted' id='foot'>
    On Sale
  </div>
  <div class='card-body'>
    <h5 class='card-title'  ><input type='radio' value='".$var2."' name='title' >".$var2."</h5>
    <p class='card-text'>Painted by ".$var1." </p>
    <p><del>$350</del></p>
    <p>$".$var3." </p>
     
    
    <button href='purch.php' type='submit' class='btn btn-primary' >Add to cart</button>
  </div>
</div> </form>";
}



    //echo $res[2];
    // echo $count;
    //echo $result;       
//   $count = mysqli_num_rows($result);
//    if($count>=1)
//     {    
     
//       while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC))
//       {
//         $var1=$row["a_name"];
//          $var2=$row["title"];
//           $var3=$row["price"];
        
      
//         echo "<div class='card' style='width: 18rem;'>
//   <img class='card-img-top' src='".$var2."jpg' alt='Illuminated manuscript'>
//   <div class='card-body'>
//     <h5 class='card-title' >".$var2."</h5>
//     <p class='card-text'>Painted by William Blake </p>
//     <p><del>$".$var3."</del></p>
//     <p>$".$var3." </p>
    
//     <button type='button' class='btn btn-primary' onclick='add()'>Add to cart</button>
  
//   </div>
// </div>";
        
    
// }
     ?>
   </div>
				
	
	</body>

</html>