<?php
	session_start();
	require 'imgretrieve.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>OLX</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="resources/css/index.css" />
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script  src="resources/js/bootstrap.min.js"></script>
      <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
	</script>
    </head>
	<body>
		<nav class="navbar navbar-expand-lg  navbar-light bg-light ">
  			<a class="navbar-brand" href="#">OLX</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 			</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto ">
      	<li class="nav-item">
      	<form class="form-inline">
				<div class="form-group" id="location-bar">
					<span class="input-group-text" id="basic-addon1">location</span>
						<select class="form-control" id="location-select">
    					  <option>India</option>
    					  <option>New Zealand</option>
    					  <option>Australia</option>
     					  <option>America</option>
       		  		  <option>Africa</option>
    		   		</select>			
				</div>      
     	   </form></li>
     	   <li class="nav-item">
     	   <form class="form-inline my-2 my-lg-0" >
      		<div class="form-group" id="search-bar">
     		 		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search-box">
     		 		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</div>    	
    		</form>
    		</li>
    		</ul>
    		<ul class="navbar-nav" id="right-menu">
   			<li>
   				<div class="btn-group" role="group" aria-label="Basic example" >
 						 <button type="button" class="btn btn-dark" onclick="location.href = 'login.php';">Login</button>
                   <button type="button" class="btn btn-secondary">Sell </button>
               </div>
   			</li>
    		</ul>
  		</div>
	</nav>
	
	<nav class="navbar navbar-expand-lg navbar-light " id="n2">
  			
  				
  				<div class="collapse navbar-collapse" id="navbarNavDropdown">
    				<ul class="navbar-nav" id="header-2">
     				 <li class="nav-item">
       				 <div class="dropdown">
  							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</button>
  								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   									 <a class="dropdown-item" href="#">Cars</a>
    									 <a class="dropdown-item" href="#">Mobiles</a>
   									 <a class="dropdown-item" href="#">Bikes</a>
 							  </div>
						</div>
     
                </li>
      			</li>
      			<li class="nav-item">
       				 <a class="nav-link" href="#">Cars</a>
      			</li>
    			  <li class="nav-item">
        			<a class="nav-link" href="#">Mobiles</a>
     			 </li>
      			<li class="nav-item dropdown">
       				 <a class="nav-link " href="#"  role="button"  >
         				 Bikes
       				 </a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         			 <a class="dropdown-item" href="#">Action</a>
          			<a class="dropdown-item" href="#">Another action</a>
          			<a class="dropdown-item" href="#">Something else here</a>
        			</div>
      		</li>
   		 </ul>
  		</div>
		</nav>
	<hr>
	
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[0] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">
      						Car 1</h5>
      						
      						BMW - 50,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[1] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">Car 2</h5>
     							Benz - 60,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[2] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">Car 3</h5>
      					alto - 70,000
    				</div>
  				</li>
				</ul>	
			</div>	
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[3] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">Car 4</h5>
      						bmw - 90,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[4] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">Car 5</h5>
     						benz - 100,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[5] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">Car 6</h5>
      					alto - 120,000
  				</li>
				</ul>	
			</div>
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[6] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">Car 7</h5>
      						bmw - 90,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[7] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">Car 8</h5>
     						benz - 100,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[0] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">Car 9</h5>
      					alto - 120,000
  				</li>
				</ul>			
		</div>	
		<div class="row">
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[1] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">Car 10</h5>
      						BMW - 50,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[2] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">Car 11</h5>
     							Benz - 60,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[3] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">car 12</h5>
      					  alto - 70,000
    				</div>
  				</li>
				</ul>	
			</div>	
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[4] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">List-based media object</h5>
      						bmw - 90,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[5] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">List-based media object</h5>
     						   benz - 100,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[6] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">List-based media object</h5>
      					   alto - 120,000
  				</li>
				</ul>	
			</div>
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[7] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">List-based media object</h5>
      						bmw - 90,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[1] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">List-based media object</h5>
     						  benz - 100,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[2] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">List-based media object</h5>
      					  alto - 120,000
  				</li>
				</ul>			
		</div>
		<div class="row">
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[3] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">List-based media object</h5>
      						BMW - 50,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[4] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">List-based media object</h5>
     							Benz - 60,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[5] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">List-based media object</h5>
      					   alto - 70,000
    				</div>
  				</li>
				</ul>	
			</div>	
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[6] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">List-based media object</h5>
      						bmw - 90,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[7] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">List-based media object</h5>
     						   benz - 100,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[0] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">List-based media object</h5>
      					  alto - 120,000
  				</li>
				</ul>	
			</div>
			<div class="col">
				<ul class="list-unstyled">
  					<li class="media">
    					<img src="<?php echo $img[1] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
      						<h5 class="mt-0 mb-1">List-based media object</h5>
      						bmw - 90,000
    					</div>
  					</li>
  					<li class="media my-4">
    					<img src="<?php echo $img[2] ?>" class="mr-3" alt="...">
   				   <div class="media-body">
     				   <h5 class="mt-0 mb-1">List-based media object</h5>
     						benz - 100,000
    					</div>
 				 </li>
  				 <li class="media">
   				 <img src="<?php echo $img[3] ?>" class="mr-3" alt="...">
    				 <div class="media-body">
     					 <h5 class="mt-0 mb-1">List-based media object</h5>
      					  alto - 120,000
  				</li>
				</ul>			
		</div>
	</div>
         
      
      
       


	</body>
</html>
