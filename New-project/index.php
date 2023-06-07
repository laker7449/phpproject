<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg  navbar-light py-4 bg-white fixed-top">
        <div class="container">
          <img src="assets/imgs/" class="logo1"/>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons"  id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

              <li class="nav-item">
                <a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                <a href="account.html"><i class="fa fa-user"></i></a>
              </li>
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>

      <!-- HOME -->
<section id="home">
    <div class="container">
        <h5>New Arrivals</h5>
        <H1><span>Best prices</span> this season</H1>
        <P>Eshop offers the best products for the most affordable prices</P>
        <button class="shop-btn">Shop Now</button>
    </div>
</section>


<!-- BRAND  -->
<section id="brand" class="container">
  <div class="row">
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.png"/>
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.png"/>
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.jpg"/>
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.png"/>
  </div>
</section>

<!-- NEW -->
<section id="new" class="w-100">
<div class="row p-0 m-0">
  <!-- ONE -->
<div class="one col-lg-4 col-md-12 col-sm-12 p-0"> 
<img class="img-fluid" src="assets/imgs/product1.jpg"/>
<div class="details">
  <h2>Extremely Awesome Thumbsleeve</h2>
  <button class="shop-btn">Shop Now</button>
</div>
</div> 
<!-- THREE -->
<div class="one col-lg-4 col-md-12 col-sm-12 p-0"> 
  <img class="img-fluid" src="assets/imgs/product3.jpg"/>
  <div class="details">
    <h2>70% off cooler for gaming</h2>
    <button class="shop-btn">Shop Now</button>
  </div>
  </div> 
<!-- TWO -->
<div class="one col-lg-4 col-md-12 col-sm-12 p-0"> 
  <img class="img-fluid" src="assets/imgs/product2.jpg"/>
  <div class="details">
    <h2>50% off Thumbsleeve gaming fan</h2>
    <button class="shop-btn">Shop Now</button>
  </div>
  </div> 
</div>
</section>


<!-- Featured -->
<section id="featured" class="my-5 pb-5">
  <div class="container text-center mt-5 py-5">
<h3>Our Features</h3>
<hr>
<p>Here you can check out our featured products</p>
  </div>
  <div class="row mx-auto container-fluid">

<?php include('server/get_featured_products.php');   ?>


<?php while($row= $featured_products->fetch_assoc()){  ?>

    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
      <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
      <a href="<?php echo "single_product.php?product_id". $row['product_id'];?>"><button class="buy-btn ">Buy now</button></a>
    </div>
    <?php } ?>
  </div>
</section>
<!-- accessories -->
<section id="featured" class="my-5">
  <div class="container text-center mt-5 py-5">
<h3>All type of Gaming accessories</h3>
<hr>
<p>Here you can check out our amazing products</p>
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/featured5.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Gaming Accessories</h5>
      <h4 class="p-price">$50.01</h4>
      <!-- <button class="buy-btn ">Buy now</button> -->
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/featured6.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Gaming Accessories</h5>
      <h4 class="p-price">$50.01</h4>
      <!-- <button class="buy-btn ">Buy now</button> -->
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/featured3.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Gaming Accessories</h5>
      <h4 class="p-price">$50.01</h4>
      <!-- <button class="buy-btn ">Buy now</button> -->
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/featured4.webp"/>
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Gaming Accessories</h5>
      <h4 class="p-price">$50.01</h4>
      <!-- <button class="buy-btn ">Buy now</button> -->
    </div>
  </div>
</section>
<section id="newsletter" class="section-p1" class="section-m1">
  <div class="newstext">
    <h4>SIGN UP FOR NEWSLETTER</h4>
    <p>Get Email update about our latest shop and <span>special offer</span></p>
  </div>
  <div class="form">
    <input type="text" placeholder="Your Email address">
    <button class="normal">Sign up</button>
  </div>
</section>

<footer class="mt-5 py-5">
  <div class="col">
    <img class="logo" src="assets/imgs/logo1.jpg">
    <h4>Contact</h4>
    <p><stong>Adress:</stong>05, Aduagba com, Sango, Ilorin, kwara state, Nigeria</p>
    <p><stong>Phone:</stong> +234 90 532 40 765</p>
    <p><stong>Phone:</stong> 10:00 - 18:00, Mon - Sun</p>
  <div class="follow">
<h4>Follow us</h4>
<div class="icon">
  <i class="fa fa-facebook-f"></i>
  <i class="fa fa-twitter"></i>
  <i class="fa fa-instagram"></i>
  <i class="fa fa-pinterest-p"></i>
  <i class="fa fa-youtube"></i>
</div>
  </div>
  </div>
<div class="col">
  <h4>About</h4>
  <a href="#">About us</a>
  <a href="#">Delivery information</a>
  <a href="#">Privacy policy</a>
  <a href="#">Terms & condition</a>
  <a href="#">Contact Us</a>
</div>
<div class="col">
  <h4>My Account</h4>
  <a href="#">Sign In</a>
  <a href="#">View Cart</a>
  <a href="#">My Wishlist</a>
  <a href="#">Track my Order</a>
  <a href="#">Help</a>
</div>

<div class="col install">
  <h4>Install App</h4>
  <p>From App Store or Google Play</p>
  <div class="row">
    <img src="assets/imgs/appstore1.jpg" alt="" style="height: 50px ; width: 130px">
    <img src="assets/imgs/appstore3.jpg" style="height: 50px ; width: 130px">
  </div>
<p>Secured Payment Gateways</p>
<img src="assets/imgs/payment1.jpg"  style="height: 50px ; width: 240px">
</div>
<div class="copyright">
  <p>@ 2023, Abubakar - HTML CSS Ecommerce Template</p>
</div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>