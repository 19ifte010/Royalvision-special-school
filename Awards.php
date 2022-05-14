<?php include "includes/header.php" ?>

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

<div class="container mt-5 mb-5">
    <h1 style="color: #2b5876; border-bottom: 2px solid #2b5876; width: max-content; font-weight: bolder;" class="pb-2 mb-5">Awards</h1>
    <div class="row">
        <div class="col-md-6 col-sm-12 mb-4">
            <a href="Img/Awards/Awards-1.png" data-fancybox="AwardsImg">
                <img src="Img/Awards/Awards-1.png" alt="img1" width="400px" height="350px" style="border: 2px solid black">
            </a>
        </div>

        <div class="col-md-6 col-sm-12">
            <a href="Img/Awards/Awards-2.png" data-fancybox="AwardsImg">
                <img src="Img/Awards/Awards-2.png" alt="img1" width="400px" height="350px"  style="border: 2px solid black">
            </a>
        </div>

    </div>

</div>

<?php include "includes/footer.php" ?>