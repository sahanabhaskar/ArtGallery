<DOCTYPE html>
	<head>
		<title>Cart</title>
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>

	#tablehead{
		margin-top:40px;
	}
		 .nav-link{
      float:right;
    }
    img{
    	 height:200px;
    	
    }
    h4{
    	text-align: right;
    }
    .bg-image{
    	background-image: url('bg2.jpg');
    }
	
</style>

	</head>
	<script src="js/jquery=3.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

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
        <a class="nav-link" href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="new1.php">LogOut <i class="fas fa-user"></i></a>
      </li>
      
    </ul>
  </div>
</nav>  
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 style="text-align:center" style=" margin-top:30px">My Shopping Cart</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-bordered"  id="tablehead" border="1" cellspacing="10px">
						<thead>
							<tr>
								<td ><h5>Painting</h5></td>
								<td><h5>Name</h5></td>
								<td><h5>Price ($)</h5></td>
								
							</tr>
							<?php 
							include("con3.php");
    						ob_start();
     						 session_start();
       						
							$query1="SELECT * from purchase where email='".$_SESSION['email']."' ";
							 $result1=mysqli_query($db,$query1);
							 $count = mysqli_num_rows($result1);
							 $total=0;
							 for($i=1;$i<=$count;$i++)
						    {
						      $res=$result1->fetch_row();
						     
						      $var1=$res[0];
						      $var2=$res[2];
						      $total+=$var2;
						      
						      echo "<tr>
								
								<td><img class='card-img-top' src='".$var1.".jpg' alt='".$var1."' style='width: 18rem;'></td>
								<td>".$var1."</td>
								<td>".$var2."</td>
							</tr>";
							}

							?>

						</thead>
					</table>
				</div>
			</div>
			<h4 >Grand Total: $<?php echo $total ?></h4>
			<a href="address.php" class="btn btn-primary" style="float:right">Buy Now</a>
		</div>
		
	</body>

</html>
	

						