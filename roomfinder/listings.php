<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts Link-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

   




    <!--Fonts Link ends-->
    <link rel="stylesheet" href="css/listings.css">

    <title>Listings</title>
</head>

<body>

    <!--Navbar Starting-->

    <div class="container">
        <nav class="navbar nav-pills fixed-top navbar-expand-lg bg-white">
            <a class="navbar-brand" href="index.php">Room Finder</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item current_page_item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="listings.php">Listings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                    <button type="button" class="btn btn-success">Post Property Free</button>
                    <button type="button" class="btn btn-outline-primary btn-sm">Login</button>

                </ul>
            </div>
        </nav>

    </div>



    <header>
    <div class="jumbotron jumbotron-image img-fluid mt-5 px-5" 
    style="background-image: url('images/listingcover.jpg'); background-size:cover; width:100%; ">
        <div class="container">
            <h1 class="mt-5 pt-5">Looking for a property?</h1>
            <p class="headp pt-4">Searching your dream home made easy.</p>
            <div class="input-group input-group-lg" style="width:60%">
                <input type="text" class="form-control" placeholder="Enter and address,town or property ID" 
                aria-label="jumbotron search" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button type="button" class="btn btn-success">Search</button>
        </div>
        </div>

        </div>
    </div>
     </header>

    <div class="categories container-fluid">
        <h3 style="font-family: 'Poppins',sans-serif;">Properties in Nepal to Buy or Rent</h3>
        <div class="row mt-5">
            <div class="col-md-2 col-sm-1 mr-4">
                <div class="thumbnail">
                    <img class="thumb-img" src="images/p1.jpg" alt="Lights" style="width:100%;border-radius: 0.8rem;">
                        <h3>House</h3>  
                    </a>
                </div>
            </div>
           <div class="col-md-2 col-sm-1 mr-4 ">
                <div class="thumbnail">
                    <img class="thumb-img" src="images/p3.jpg" alt="Lights" style="width:100%; border-radius: 0.8rem;">
                        <h3>Flat</h3>  
                    </a>
                </div>
            </div>
            <div class="col-md-2  mr-4">
                <div class="thumbnail">
                    <img class="thumb-img" src="images/p8.jpg" alt="Lights" style="width:100%;border-radius: 0.8rem;">
                        <h3>Land</h3>  
                    </a>
                </div>
            </div>
            <div class="col-md-2 mr-4">
                <div class="thumbnail">
                        <img class="thumb-img" src="images/p4.jpg" alt="Lights" style="width:100%;border-radius: 0.8rem;">
                        <h3>Apartments</h3>  
                    </a>
                </div>
            </div>
    </div>
    

    
    <div class="Available my-5 p-2">
    <h3>Latest Properties</h3>
    <section class=" row listings mt-5">
    <?PHP

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'roomfinder');

	//  if($con){
	//  echo "connection succussful";
	// }else{
	//  	echo "no connection";
    //  }

    $query = " SELECT  `image`, `name`, `location`, `area`, `price` FROM `listings` order by id ASC ";

    $queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_assoc($queryfire)){

    ?>

<div class="row ">
<div class="product-card container mb-3 mx-4">
  <div class="badge">Hot</div>
  <div class="product-tumb img-fluid">
    <img src="<?php echo 
    $product['image'];  ?>" alt="Listings" style="height:180px; width:100%">
  </div>
  
  <div class="product-details mt-3">
    <span class="product-catagory"><dt><?php echo $product['name'];  ?></span></dt><br>
    <p class="text-muted small"><i class="fa fa-map-marker mr-2"></i><?php echo $product['location'];  ?><br>
    <i class="fa fa-map mr-2"></i><?php echo $product['area'];  ?></p>
    <p><dt> NPR. <?php echo $product['price'];  ?><dt></p>
  </div>
</div>
</div>


            
            <?php		
		            }
	            }
	         ?>

</div>
</section> 

    


 <!--Bootstrap add-ons-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

     </body>
     </html>

