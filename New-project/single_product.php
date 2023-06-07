<?php
include('server/connection.php');



// $product_id= $_GET['product_id']; 

   


    
if(isset($_GET['product_id'])){
$product_id = $_GET['product_id'];

$query=mysql_query("select * from products where product_id='$product_id' ")or die(mysql_error());
  // $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
  
  $row=mysql_fetch_array($query);
   
  $product_image = $row['product_image'];
  $product_image = $row['product_image'];
  $product_image2 = $row['product_image2'];
  $product_image3 = $row['product_image3'];
  $product_image4 = $row['product_image4'];
  $product_name = $row['product_name'];
  $product_price = $row['product_price'];
  $product_description = $row['product_description'];

//no product id was given
}

?>

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

<section class="container single-product my-5 pt-5">
  

    <div class="row mt-5">
    <?php
    while($row = mysqli_fetch_assoc($result)){
?>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <img class="img-fluid pb-1" src="assets/imgs/<?php echo $product_image ?>"  id="mainimg"/>
       
            <div class="small-img-group">
                <div class="small-img-col">
                   <img src="assets/imgs/<?php echo $product_image ?>" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                   <img src="assets/imgs/<?php echo $product_image2 ?>" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                   <img src="assets/imgs/<?php echo $product_image3 ?>" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                   <img src="assets/imgs/<?php echo $product_image4 ?>" alt="" width="100%" class="small-img">
                </div>
                
        </div>
        </div>

<div class="col-lg-6 col-md-12 col-12">
<!-- <h6>Thumbsleeves for mobile gaming</h6> -->
<h3 class="py-4"><?php echo $product_name ?></h3>
<h2>#<?php echo $product_price ?></h2>
<input type="number" value="1"/>
<button class="buy-btn">Add to cart</button>
<h4 class="mt-2 mb-2">Product details</h4>
<span><?php echo $product_description ?></span>
<div class="py-2">
  <h2>Overview</h2>
  <hr>
  <h4>Essential details</h4>
  <h6 class="text">Feature:
    With Phone Holder
    Private Mold:
    Yes</h6>
    <h6 class="text">Brand Name:
      oem
      Model Number:
      zt-159</h6>
      <h6 class="text">Compatible Platform:
        for ps4, Android & iOS Mobile Phone
        Type:
        Joystick</h6>
        <h6 class="text">Material:
          silver
          Color:
          black, yellow and red</h6>
        <h6 class="text">Platform:
          for ps4, Android & iOS Mobile Phone
          Type:
          Joystick
          Place of Origin:
          Jiangsu, China</h6>
          <hr>
          <h3>Purchase Details</h3>
          <h6 class="text">Delivery method: By dispatch to all state in Nigeria    Delivery fee: # 1000 only</h6>
        </div>
        <div class="pay">
          <h3>Payments: 
         <img src="assets/imgs/pay1.png" width="31pxpx" height="10px" alt="">
         <img src="assets/imgs/pay2.png" width="16px" height="10px" alt="">
         <img src="assets/imgs/pay3.png" width="49.16px" height="10px" alt="">
        </h3>
        </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Quantity(pieces)</th>
                <th scope="col">Lead time (days)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td>1 - 100</td>
                <td>2 days max</td>
                
              </tr>
              <tr>
                
                <td>101 - 1000</td>
                <td>30 days max</td>
                
              </tr>
            </tbody>
          </table>

</div>
<?php 
    }
  
?>

    </div>
</section>

<!-- related products -->
<section id="featured" class="my-5 pb-5">
  <div class="container text-center mt-5 py-5">
<h3>You may also like:</h3>
<hr>
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/featured1.webp"/>
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
      <img class="img-fluid mb-3" src="assets/imgs/featured2.webp"/>
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
<script>

var mainimg = document.getElementById("mainimg");
var smallimg = document.getElementsByClassName("small-img");
smallimg[0].onclick = function(){
  mainimg.src = smallimg[0].src;
}
smallimg[1].onclick = function(){
  mainimg.src = smallimg[1].src;
}
smallimg[2].onclick = function(){
  mainimg.src = smallimg[2].src;
}
smallimg[3].onclick = function(){
  mainimg.src = smallimg[3].src;
}
</script>
</body>
</html>