<?php include "db.php" ?>
<?php
session_start();
ob_start();
if (isset($_POST['submit'])) {
    @$username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);
    @$cpassword = md5($_POST['cpassword']);
    @$usertype = $_POST['usertype'];

    $select = " SELECT * FROM user_details WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($connection, $select);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
            if($row['usertype'] == 'Admin'){
                $_SESSION['name'] = $row['username'];
                $_SESSION['usertype'] = $row['usertype'];
                $_SESSION['authentication'] == true;
                if(!headers_sent()){
                    @header('location:Home_admin.php');
                }else{
                    echo '<script type="text/javascript">windows.location.href="Home_admin.php"</script>';
                }
            }else{
                $_SESSION['name'] = $row['username'];
                $_SESSION['usertype'] = $row['usertype'];
                $_SESSION['authentication'] == true;
                if(!headers_sent()){
                    @header('location:Home.php');
                }else{
                    echo '<script type="text/javascript">windows.location.href="Home.php"</script>';
                }
            }
    }else{
        $error[] = 'incorrect email or password!';
    }
}
ob_end_flush();
?>

<!-- Header -->
<?php include "includes/header.php" ?>

<div class="container parentClass_form_center">
    <div class="login_logo">
        <img src="Img/logo.png" alt="">
    </div>
    <div class="col-md-8 form_center">
        <div class="login-heading mb-3">
            <h1 class="text-center" style="color: #2b5876; border-bottom: 2px solid #2b5876;">Login</h1>
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
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-text">Don't have an account? <a href="register.php">register here !</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-text"><a href="ForgetPass.php">Forget Password ?</a></div>
                    </div>

                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Login"></input>
        </form>
    </div>
</div>
