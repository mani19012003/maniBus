<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="shortcut icon" href="img/" type="image/x-icon">
    <title>Booking</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="style2.css">
    <style>
      .book{
        background-image: url(img/book-bg.jpeg);
      }
      .book > .row{
        backdrop-filter: blur(5px);
        background-color: rgba(255, 255, 255, 0.5);
        padding: 5%;
        border-radius: 20px;
      }

      .img-bus{
        transition: 0.3s ease;
        filter: brightness(80%);
      }
      .img-bus:hover{
        transition: 0.3s ease;
        transform: scale(1.05);
        filter: brightness(100%);
      }
      .text-sec{
    font-family: 'Kanit', sans-serif;
}

    </style>

    

    <STYLE>
        ::-webkit-scrollbar {
    width: 6px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: #ffffff; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }


/* Trending Games scroolbar  */
#scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
#scrollbar {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
    </STYLE>

</head>

<body>

    <!-- Header  -->
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

   <section style="width: 100%;height: 90vh;display: flex;">
    <div style="width: 20%;height: 100%;background-color: #888;display: flex;flex-direction: column;align-items:center ;justify-content: space-evenly;">
    <img src="img/bus1.jpeg" class="img-bus" style="width: 80%;height: 25vh;border-radius: 10px;" alt="">
    <img src="img/bus2.jpg"  class="img-bus"  style="width: 80%;height: 25vh;border-radius: 10px;" alt="">
    <img src="img/bus3.webp"  class="img-bus" style="width: 80%;height: 25vh;border-radius: 10px;" alt="">
    </div>
    <div style="width: 80%;height: 100%;">
      <div class="book w-100 h-100 d-flex align-items-center justify-content-center">
        <div class="row w-30 ">
            <div class="col-md-12 d-flex flex-column gap-4">
               
               
      
                <div  class="gap-3 d-flex flex-column align-items-center justify-content-center" >
                <h1 class="text-sec">Book Now</h1>    
                <form id="myForm" action="booking.php" method="post" class="container d-flex align-items-center justify-content-center flex-column gap-3">
                    <div class="container">    
                        <input type="email" name="email" class="form-control" placeholder="Enter email id" required />
                    </div>
                    <div class="container">
                       
                        <input type="number" name="passengers" class="form-control" placeholder="Enter number of passenger" required>
                    </div>
                    <div class="container">
                       
                      <input type="file" name="file" class="form-control" placeholder="Enter your password" required>
                  </div>
                  <div class="container d-flex align-items-center justify-content-center">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit" >
                  </div>
                  </form>


            </div>
        </div>
    </div>
    </div>
   </section>


 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booked Successfully</h5>
        
      </div>
      <div class="modal-body">
       <img src="img/ticket.png" style="width: 100%;height:200px;" alt="">
      </div>
      <div class="modal-footer">
        
        <a download="ticket" href="img/ticket.png" class="btn btn-primary">download</a>
      </div>
    </div>
  </div>
</div>

  <script>
      document.getElementById("myForm").addEventListener("submit", function(event) {
        event.preventDefault();
        modalw();
    });
  function modalw() {
  var myModal = new bootstrap.Modal(document.getElementById("myModal"));
  myModal.show();
}
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
   
  <?php
  include('connection.php');
      
   $email = $_POST['email'];
   $passenger = $_POST['passengers'];
   $file = $_POST['file'];
 
$select_query="INSERT INTO bookinglist (email, passengers,file)
VALUES ( $email, $passenger,$file)";
$result_query= mysqli_query($conn,$select_query);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

</body>

</html>