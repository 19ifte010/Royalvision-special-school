<?php @include "db.php" ?>
<?php include "includes/header.php" ?>
<?php

if(isset($_POST['update'])){
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $select = " SELECT * FROM user_details WHERE email = '$email'";
    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {
        if ($password != $cpassword) {
            $error[] = 'password not matched!';
        } else {
            $query = "UPDATE user_details SET `password` = '$password', `cpassword` = '$password' WHERE `email` = '$email' ";
            mysqli_query($connection, $query);
            if(!headers_sent()){
                header('location:index.php');
            }else{
                echo '<script type="text/javascript">windows.location.href="index.php"</script>';
            }
        }
    }else{
        $error[] = 'user not Found!';

    }
}
?>
<div class="container parentClass_form_center">
    <div class="login_logo">
        <img src="Img/logo.png" alt="">
    </div>
    <div class="col-md-8 form_center">
        <div class="login-heading mb-3">
            <h1 class="text-center" style="color: #2b5876; border-bottom: 2px solid #2b5876;">Forget Password</h1>
        </div>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            };
        };
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="new Password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="Password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label for="confirm Password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="Retype Password" name="cpassword" placeholder="Retype password" required>
            </div>
            <div class="mb-3">
                <div class="form-text"><a href="index.php">Go to login !</a></div>
            </div>
            <input type="submit" class="btn btn-primary" name="update" value="Updates"></input>
        </form>
    </div>
</div>

<?php include "includes/footer.php" ?>
