<style>
.alert-danger {
    margin: 0;
}
.alert-success {
    margin: 0;
}
	
	</style>

<?php
	echo'
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
		<a class="navbar-brand" href="main.php">Bango</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="main.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about.php">About us</a>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Cources
			  </a>
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="#">Enroll for free</a></li>
				<li><a class="dropdown-item" href="#">Enroll for paid</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Copy Source code</a></li>
			  </ul>
			</li>
			 
		  </ul>
		  <form class="d-flex">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		  </form>
	<button type="button" class="btn btn-outline-primary mx-2"data-bs-toggle="modal" data-bs-target="#login">Log in</button> 
	<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signup" >Sign up</button>

	</div>
	  </div>
	</nav>
	';
	
	 include 'login.php' ;
	 include 'signup.php';
	 if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success" role="alert">
  <strong>SUCESS!</strong> You have sucessfully signup to Bango-classes .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
	 
	 if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false"){
    echo '<div class="alert alert-danger" role="alert">
  <strong>Error!</strong> Password and Confirm password not match Or Email is already in use .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}

 	 
	 ?>
	

  