<!-- Database -->
<?php @include ('db.php') ?>

<!-- Header -->
<?php include 'includes/header.php' ?>

<!-- Php code -->
<?php
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $select = " SELECT * FROM user_details WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist!';
    } else {
        
        if ($password != $cpassword) {
            $error[] = 'password not matched!';
        } else {
            $query = "INSERT INTO user_details (username,email,password,cpassword) VALUES('$username','$email','$password','$cpassword')";
            mysqli_query($connection, $query);
            if(!headers_sent()){
                header('location:login.php');
            }else{
                echo '<script type="text/javascript">windows.location.href="login.php"</script>';
            }
        
        }
    }
}?>

<div class="container parentClass_form_center">
    <div class="login_logo">
        <img src="Img/logo.png" alt="">
    </div>
    <div class="col-md-8 form_center">
        <div class="login-heading mb-3">
            <h1 class="text-center" style="color: #2b5876; border-bottom: 2px solid #2b5876;">Register</h1>
        </div>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            };
        };
        ?>
        <form action="register.php" method="post">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label for="Retype Password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="Retype Password" name="cpassword" placeholder="Retype password" required>
            </div>
            <div class="mb-3">
                <div class="form-text">already have an account? <a href="index.php">login here !</a></div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Register"></input>
        </form>
    </div>
</div>