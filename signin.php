<?php
    session_start();
    include_once('functions.php');
    $userdata = new DB_con();

    if (isset($_POST['login'])){
        $uname = $_POST['username'];
        $password = md5($_POST['password']);

        $result = $userdata->signin($uname,$password);
        $num = mysqli_fetch_array($result);

        if($num > 0){
            $_SESSION['id'] = $num['id'];
            $_SESSION['fname'] = $num['fullname'];
            echo"<script>alert('Login Successful!');</script>";
            echo"<script>window.location.href='welcome.php'</script>";

        }else{
            echo"<script>alert('Something went wrong ! Please try again.');</script>";
            echo"<script>window.location.href='signin.php'</script>";

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <h1 class="mt-5">Login Page</h1>
    <hr> 

    <form method="post">
       
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username">
            <span id="usernameavailable"></span>
        </div>
       
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="login" name="login" class="btn btn-success">Login</button>
        <a href="index.php" class="btn btn-primary">Register</a>
    </form>
</div>

    
     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>