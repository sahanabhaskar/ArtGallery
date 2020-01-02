<DOCTYPE html>
<head>
	<title>Address</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>

<?php 
	function Redirect($url, $permanent = false){
		 header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
	}
?>
</head>
<style>
	form{
		margin-top:10px;
		margin-left:20px;
		 margin-right:20px;
	}
	.anc{
		margin-left:30px;
		margin-top:80px;
	}

		 .nav-link{
      float:right;
    }
			body, html {
  height: 100%;
}

 {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');

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
  text-align: left;
}
.fa {
  padding: 10px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 60%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}



.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}
body{
	background-size: cover;
}

.navbar{
  height: 40px;
}
</style>
<body>
	<!-- <div class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i>  Home</a> 
  
  <a href="#"><i class="fa fa-shopping-cart"></i>  Cart</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
</div> -->
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.html"><i class="fa fa-shopping-cart" ></i></a>
      </li>
      
      
    </ul>
  </div>
</nav>   -->
<!-- 
 -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">PURPLE RIBBON ARTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="purple\purpleribbonarts.weebly.com\index.html">Home <span class="sr-only">(current)</span></a>
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
	<div class="bg-image"></div>
	<div class="bg-text">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="email" class="form-control" id="name" placeholder="eg: Mark Twain">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact Number</label>
      <input type="password" class="form-control" id="numb" placeholder="(555-5555-555)">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose</option>
        <option value="volvo">California</option>
  <option value="saab">Texas</option>
  <option value="opel">Florida</option>
  <option value="audi">Colorado</option>
  <option value="volvo">New Jersey</option>
  <option value="saab">Arizona</option>
  <option value="opel">Pennsylvania</option>
  <option value="audi">Michigan</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <a type="submit" class="btn btn-primary" href="/last.html"> Purchase</a>
  <a href="artist1.php" class="anc" > Continue Shopping </a>
</form>

</div>
<!-- <footer>
  

<!- Add font awesome icons -->
<!-- <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>

<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>

  <p text-align="center"><i class="fa fa-copyright"  style="font-size:15px"></i> Copyright. All rights reserved.</p>
</footer> -->
 


</body>
</html>