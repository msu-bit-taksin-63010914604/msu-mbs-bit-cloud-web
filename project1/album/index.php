
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/e/album/lo.jpg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Album example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">


	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
</head>
<div class="homeheader">
    </div>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
</HEAD>
<BODY>
<header>
<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
        
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm"> 

    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
       <img src="Logo2.png" width="60" height="70" />
        <strong>BMJ SHOP</strong>
      </a>
        <div align="right"> <button class="btn btn-primary" ><a href="login.php" class="text-dark"> LOGIN </a></button></div>
    
    </div>
  </div>
  
</header>

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">BMJ SHOP</h1>
        <p class="lead text-muted">Whether it's raining or sunny, BMJ is ready to add fun to every day. With chic items that come with shoes, including sweet style colors like pink and pastel blue on the popular items of the collection Helps to enhance the most cute details. Like no other!</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <h2>product list</h2>
<p>
	<a href="basket.php" class="btn btn-primary">shopping cart</a>
</p>


<br><br>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">     
          
          
    <?php
	include_once("connectdb.php");
	$sql = "SELECT * FROM products";
	$rs = mysqli_query($conn,$sql);
	while($data= mysqli_fetch_array($rs)){
		$img = $data['p_id'];
		echo "<img src='product-images/$img.jpg' width='400'><br>";
		echo $data['p_name']."<br>";
		echo $data['p_price']." บาท <br>";
		echo $data['p_details']."  <br>";
		
		echo "<a href='basket.php?id=$img';'<button type='submit' name='button' id='button' class='btn btn-success' role='button' >หยิบลงตะกร้า</a> <br>";
	
	}?>
    
    

      </div>
    </div>
  </div>
 
  
  
  

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Thank you for coming to choose products on the website!</p>

  </div>
</footer>


    <script src="bootstrap.bundle.min.js"></script>

      
  </body>
</html>
