<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="manifest" href="manifest.json">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mani bus</title>
    <link rel="shortcut icon" href="img/icons8-m-16.png" type="image/x-icon">
  
    <link rel="shortcut icon" href="img/download.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    
    

<section class="hero" id="home">
    <nav class="navbar bg-black navbar-expand-lg d-flex align-items-center justify-content-between px-3">
       
            <a class="navbar-brand text-white" href="#">
                <img src="img/Component 1.png" alt="Logo" width="120" height="40" class="d-inline-block align-text-top">
              </a>

            
              <div class="dropstart">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img width="40px" height="40px" style="border-radius: 50%;" src="img/domar.jpg" alt="">
                </button>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="landing.html">logout</a>
                
                </div>
              </div>
      </nav>
    <div style="width: 100%;height: 90vh;" class="bg-info px-3 d-flex align-items-center justify-content-center flex-column">
  

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Hashed Password</th>
      <th scope="col">Password</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
     include('connection.php');
    $select_query="Select * from signup";
       $result_query= mysqli_query($conn,$select_query);
     
       while($row=mysqli_fetch_assoc($result_query)){
        $id=$row['id'];
        $email=$row['email'];
        $password= crypt($row['email'],'rl');
        $originalpassword= $row['email'];
        echo "
        <tr>
        <th scope='row'>$id</th>
      <td>$email</td>
      <td>$password</td>
      <td>$originalpassword</td>
    
    </tr>";
       }
    ?>
    </div>
</section>
    
    
  
  </tbody>
</table>
    






<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/64db55fb94cf5d49dc6a7f52/1h7scfotf';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  

  <script>
    (function (s, e, n, d, er) {
      s['Sender'] = er;
      s[er] = s[er] || function () {
        (s[er].q = s[er].q || []).push(arguments)
      }, s[er].l = 1 * new Date();
      var a = e.createElement(n),
          m = e.getElementsByTagName(n)[0];
      a.async = 1;
      a.src = d;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://cdn.sender.net/accounts_resources/universal.js', 'sender');
    sender('7cab0d1f607165')
  </script>

  <!-- <a href="#home" class="attach">
   <span class="fas fa-2x mt-1 fa-caret-up"></span>
  </a> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<script src="index.js"></script>

</body>
</html>