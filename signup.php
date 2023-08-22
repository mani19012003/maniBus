<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        
        
        $sql = "Select * from signup where username='$username'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

        $sql = "Select * from signup where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  
        
        if($count_user == 0 && $count_email==0){  
            
            if($password == $cpassword) {
    
                $hash = password_hash($password, 
                                    PASSWORD_DEFAULT);
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO signup (username, email, password) VALUES('$username', '$email','$hash')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    header("Location: welcome.php");
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "index.php";
                    </script>';
            }      
        }  
        else{  
            if($count_user>0){
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Username already exists!!")
                    </script>';
            }
            if($count_email>0){
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Email already exists!!")
                    </script>';
            }
        }     
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="style1.css">
</head>

<body>
  
    <!-- <div class="navbar-con pt-3 ">
    <h1 class="text-xl text-center">CHEETAH COURIER SERVICE</h1>
    </div> -->
    <div class="login-box w-100  d-flex align-items-center justify-content-center">
        <div class="row w-30 ">
            <div class="col-md-12 d-flex flex-column gap-4">
                <h2 class="text-center fs-1  login text-uppercase">SIGN UP</h2>
               
                 <!-- <?php echo $error; ?> -->
                <form action="login form.php" class="gap-3 d-flex flex-column align-items-center justify-content-center" method="post">
                    <div class="container">
                        <input type="text" name="name" class="form-control" placeholder="username " required />
                    </div>
                    <div class="container">
                        <input type="email" name="email" class="form-control" placeholder="manibus@gmail.com" required>
                    </div>
                    <div class="container">
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="container">
                        <input type="password" name="retakepassword" class="form-control" placeholder="retype password" required>
                    </div>
                    <div class="container d-flex gap-4 align-items-center justify-content-center">
                        <input type="submit" name="submit" class="btn w-100 btn-primary" value="SignUp" />
                    </div>
                    <p class="text-center">Already have account? <a href="login form.html" class="signup-btn">login</a>.</p>
                   


                </form>
            </div>
        </div>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
