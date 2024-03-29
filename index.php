<?php
include("database.php");


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Loyola"s cooking </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Noto+Serif:wght@300&family=Nova+Square&family=Poppins:ital,wght@0,300;1,400&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Nova+Square&family=Poppins:ital,wght@0,300;1,400&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Nova+Square&family=Poppins:ital,wght@0,300;1,400&family=Sacramento&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Caprasimo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Balsamiq Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bagel Fat One' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
 


</head>
<body>     

 <header>

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h1 class="header-nav">LOYOLA</h1></a>
             
  <button class="btn btn-success d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"><i class="fa-solid fa-utensils"></i></button>

          <div class="justify-content-center collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><h5 class="item-nav" >HOME</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><h5 class="item-nav" >ABOUT LOYOLA</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><h5 class="item-nav" >CONTACT LOYOLA</h5></a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
    

    
    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel" style="color: green;">LOYOLA</h5>
        <button type="button"  class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
             <ul class="hol1">
    <li class="hol2">
        <h4 class="hide-on-laptop">HOME</h4>
    </li>
    <li class="hol2">
        
        <h4 class="hide-on-laptop">ABOUT</h4>
    </li>

    <li class="hol2">
        
        <h4 class="hide-on-laptop">CONTACT</h4>
    </li>
   </ul>
      </div>
    </div>
</div>
 </header>   

 <section  id="first-section" style="background-image: url(images/cooking-background.jpg);">

    <div class="container">
  <div class="row">
    <div class="card-col col-sm-6">
      <img class="image-card" src="images/card-image.jpg" alt="" >
    </div>
    <div class="col-sm-6">
        <h1>Loyola's Cooking recipe's  </h1>
        <h3>Try our recipes's today and enjoy a restaurant-quality meal right in the comfort of your own home! </h3>
        
      </div>
  </div>
    </div>


 </section>


 <section id="second-sectiom">
    <div class="coni container">
<div class="row">
    <div class=" col-sm-4">
        <div class="card bg-dark" >
            <img src="images/card-cook1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">This mouth-watering recipe is quick and easy to make.</p>
            </div>
          </div>
    </div>
   
      <div class="card-second-image col-sm-4">
        <div class="card bg-dark" >
            <img src="images/card-cook2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Introducing the perfect weeknight dinner dish - spicy garlic shrimp pasta! </p>
            </div>
          </div>
      </div>
      <div class="card-second-image col-sm-4" >
        <div class="card bg-dark">
            <img src="images/card-cook3.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <p class="card-text"> It's the perfect dinner dish that will leave your taste buds satisfied..</p>
            </div>
          </div>
      </div>
</div>
    </div>

 </section>

 <section class="third-section" style="background-image: url(images/thirdimage.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
         <div class="col-sm-6">
       <h3 class="txt"> You can find step-by-step tutorials on preparing anything from simple salads to complex gourmet dishes</h3>
       <h3 class="txt">Whatever your level of experience, there are plenty of resources available to help you learn how to prepare delicious meals at home.</h3>
         </div>
         <div class="col-sm-6">
            <iframe  height="315px" src="https://www.youtube.com/embed/agvFkgJBwk4?si=SpTr_lUqZnSy1drY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="padding-top: 10px;"></iframe>
        </div>
        </div>
     </div>
    
 </section>

 <section class="fourth-section">
    <div class="container">
        <div class="row" >
            <div class="second-col col-sm-6" style="background-image: url(images/contact-image.jpg); height: 500px">
            <h3>Loyola's contact  </h3>
    
            </div>
            <div class="col col-sm-6" style="padding-top: 20px; background-color: #D9EDBF;">
            <h2 class="txt1-1">Send Us A  Message </h2>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
<br>
<input  type="text" class="for-fold" name="name" id="name" required placeholder="Full Name"  size="30" style="height: 50px;">
<br>
<br>
<input class="for-fold" type="email" name="email" id="email" placeholder="Email" required  size="30" style="height: 50px;">
<br>
<br>
<input class="for-fold" type="text" name="address" id="address" placeholder="Address" required  size="30" style="height: 50px;">
<br>
<br>
<input class="for-fold" type="number" name="number" id="number" placeholder="Phone Number" required  size="30" style="height: 50px;">
<br>
<br>
<input  type="submit" href="posts" class="btn btn-success btn-lg"  style="width: 100px;"  value="Login in">
</form>

            </div>
        </div>

    </div>
    
 </section>


<section id="lasr-section" style="background-color: #DBE7C9;">
<h1>Social Media Platform's</h1>
<i class="icon-1 fa-brands fa-facebook fa-3x" style="color: #316FF6;"  ></i>

<i class="icon-1 fa-brands fa-twitter fa-3x" style="color: blue;"></i>
<i class="icon-1 fa-brands fa-instagram fa-3x" style="color: #cd486b ;"></i>


</section>
    </body>

    </html>


    <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
   $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
   $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
   $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_SPECIAL_CHARS);

   if(empty($name)){
      echo"Please enter a name";
  }
   elseif(empty($email)){
     echo"Please enter your email";
     }
   else {
      
         $sql = "INSERT INTO users (name, email, number, address)
         VALUES ('$name', '$email', '$number', '$address')";

mysqli_query($conn, $sql);
}

}

?>













