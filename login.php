<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from signup where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        


        if($count == 1){  
            header("Location: home.php");
        }  
        elseif($email=="megalamani9616@gmail.com" && $password =="manimegala"){
            header("Location: admin.php");
        }
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }  

    }
    ?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="style1.css">
</head>

<body>
  
   <span style="position:fixed;left: 10px;top: 10px;">
  <a href="landing.html" class="fas fa-arrow-circle-left fa-2x" style="color: #212121;"></a>
   </span>
    
    <div class="login-box w-100  d-flex align-items-center justify-content-center">
        <div class="row w-30 ">
            <div class="col-md-12 d-flex flex-column gap-4">
                <h2 class="text-center fs-1  login text-uppercase">Login</h2>
               
                 <!-- <?php echo $error; ?> -->
                <form autocomplete="off" action="login.php" class="gap-3 d-flex flex-column align-items-center justify-content-center" method="post">
                    <div class="container">
                        
                        <input type="email" autocomplete="off" name="email" class="form-control" placeholder="Enter email Id" required />
                    </div>
                    <div class="container">
                       
                        <input type="password" autocomplete="off" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <div class="container d-flex gap-4 align-items-center justify-content-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="SignIn" />
                        <button  class="btn btn-danger">Forgot Password</button>
                    </div>
                    <p class="text-center">Don't have an account? <a href="signup.php" class="signup-btn">sign-up</a>.</p>
                    


                </form>
            </div>
        </div>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
 
