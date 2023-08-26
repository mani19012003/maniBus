<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus List</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="buslist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg main-text">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
            <img src="img/Component 1.png" alt="Logo" width="120" height="40" class="d-inline-block align-text-top">
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link color-whi"  href="landing.html#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-whi" href="landing.html#contact">CONTACT</a>
          </li>
        </ul>
      
          <div class="dropstart navbar-text">
            <a class=" fas fa-user btn-danger btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a> 
            </a>
          
            <ul class="dropdown-menu mt-4">
       
              <li><a class="dropdown-item" href="landing.html">logout</a></li>
            </ul>
          </div>
      
      </div>
    </div>
  </nav>
    <div class="d-flex" style="width: 100%;height: 90vh;">
       
          
           <section class="bg-dark" style="width: 20%;height:90vh;">
           <h1>filter</h1>
          </section>

           <section class="d-flex flex-column align-items-center p-2" style="width: 80%;height: 100%;overflow-y: scroll;">
             
             <section class="d-flex flex-wrap align-items-center justify-content-evenly" style="width: 100%;;overflow-y: scroll;">
             <?php
             include('connection.php');
                 
              $from = $_POST['from'];
              $to = $_POST['to'];
            
            
       $select_query="Select * from list where fromloc like '$from' and toloc like '$to'";
       $result_query= mysqli_query($conn,$select_query);
     
       while($row=mysqli_fetch_assoc($result_query)){
        $product_name=$row['BusName'];
        $product_from=$row['fromloc'];
        $product_to=$row['toloc'];
        $product_image=$row['image'];
        $product_price=$row['price'];
        $product_rating=$row['rating'];
        echo " <div class='card mb-3' style='max-width: 440px;height: 130px;width: 40%;max-height: 150px;overflow: hidden;' 	>	
        <div class='row g-0'>
        <div class='col-md-4' style='border-radius: 5px 0 0 5px;'>
        <img src='img/$product_image' width='100%' height='100%'  style='filter: brightness(80%);'alt='prtravels'>
        </div>
        <div class='col-md-8'>
        <div class='card-body ccard'>
          <h5 class='card-title'>$product_name</h5>
          <p class='card-text'>$product_from - $product_to</p>
          <div class='d-flex align-items-center justify-content-start gap-2'>
          <a href='booking.php' class='btn btn-primary btn-sm'>Book now @ $product_price</a>
          <a  class='btn btn-dark btn-sm'>$product_rating/5</a>
          </div>
        </div>	
        </div>
      </div>
      </div>
    </span>";
   
      
    }
  
    ?>
             </section>

          </section>
      
        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</body>
</html>