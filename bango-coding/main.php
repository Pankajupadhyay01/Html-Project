<!doctype html>
<html lang="en">
  <head>
   	<link rel="stylesheet" href="main.css">	
	 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Bango-coding</title>
  </head>
  <body text=black >
   <?php include 'header.php';?>
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/286x180/?coding,microsoft" height="500px" width="600px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/286x180/?coding,cources" height="500px" width="600px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/286x180/?coding,google" height="500px" width="600px"  class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1 class="text-center">Welcome to Bango-Coding</h1>  
  
  
 <div class="container">
 <div class="row">
 <div class="col-sm-4 py-3 py-sm-0">
  <div class="card" style="width: 18rem;"  >
  <img src="https://source.unsplash.com/286x180/?coding,cources" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" >11<sup>th</sup> & 12<sup>th</sup> Python</h5>
    <p class="card-text">Get complete python cources for class 11<sup>th</sup> & class 12<sup>th</sup> at very affodable price.</p>
   
   <?php include 'enroll.php';?>
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book a class</button>
  </div>
</div>
 </div>
<!--2-->
 <div class="col-sm-4 py-3 py-sm-0 ">
  <div class="card" style="width: 18rem;"  >
  <img src="https://source.unsplash.com/286x180/?coding,cources" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" >Build new Skill  </h5>
    <p class="card-text">All cources that can change your career is here at very affodable price learn from 0 to hero.</p>
    <a href="#" class="btn btn-primary">Enroll for cources</a>
  </div>
</div>
 </div>
 <!--3-->
 <div class="col-sm-4 py-3 py-sm-0 ">
  <div class="card" style="width: 18rem;"  >
  <img src="https://source.unsplash.com/286x180/?coding,cources" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" >Source code</h5>
    <p class="card-text">Get source code of all languages at no cost get code for you school or collage project .</p>
    <a href="#" class="btn btn-primary">Get code here</a>
  </div>
</div>
 </div>
</div>
  </div>

 
    <?php include 'footer.php';?>

  
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>