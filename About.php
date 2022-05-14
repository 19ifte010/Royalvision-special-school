<!-- Header -->
<?php include 'includes/header.php' ?>
<!-- Navbar -->
<?php
@session_start();
include "db.php";

if(@$_SESSION['usertype']=='User'){
    @include "Component/nav_user.php";
 }
if(@$_SESSION['usertype']=='Admin'){
    @include "Component/nav_admin.php";
 }
 else{
    @include "Component/nav.php";
 }

?>

<!-- Our vision Our mission Our Objective -->
<?php include 'Component/About/visionmission.php' ?>

<!-- Footer -->
<?php include 'includes/footer.php' ?>
 

  
