<!-- Header -->
<?php include "includes/header.php" ?>

<!-- Navigation -->
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
    <h1 style="color: #2b5876; border-bottom: 2px solid #2b5876; width: max-content; font-weight: bolder;" class="pb-2 mb-5">School Activity</h1>
    <div class="row">
        <div class="col-md-8 mb-5">
            <h2 style="text-decoration: underline; color:#2b5876" class="mb-3">Red Day Celebration</h2>
            <a href="Img/Events/Red day.png" data-fancybox="Event-img-1">
                <img src="Img/Events/Red day.png" alt="img1" width="750" height="350" style="border: 2px solid black">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mb-5">
            <h2 style="text-decoration: underline; color:#2b5876" class="mb-3">Annual day celebration</h2>
            <a href="Img/Events/Annual day.png" data-fancybox="Event-img-2">
                <img src="Img/Events/Annual day.png" alt="img1" width="750" height="350" style="border: 2px solid black">
            </a>
        </div>
    </div>

    <h2 style="color: #2b5876; border-bottom: 2px solid #2b5876; width: max-content; font-weight: bolder;" class="pb-2 mb-5">Sports Day</h2>

    <div class="row">
        <div class="col-md-6 mb-5">
            <a href="Img/Events/Sports day-1.png" data-fancybox="Event-img-3">
                <img src="Img/Events/Sports day-1.png" alt="img2" width="500" height="350" style="border: 2px solid black">
            </a>

        </div>
        <div class="col-md-6 mb-5">
            <a href="Img/Events/Sports day-2.png" data-fancybox="Event-img-3">
                <img src="Img/Events/Sports day-2.png" alt="img3" width="500" height="350" style="border: 2px solid black">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-5">
            <a href="Img/Events/Sports day-3.png" data-fancybox="Event-img-3">
                <img src="Img/Events/Sports day-3.png" alt="img2" width="500" height="350" style="border: 2px solid black">
            </a>

        </div>
        <div class="col-md-6 mb-5">
            <a href="Img/Events/Sports day-4.png" data-fancybox="Event-img-3">
                <img src="Img/Events/Sports day-4.png" alt="img3" width="500" height="350" style="border: 2px solid black">
            </a>
        </div>
    </div>

    <div class="row">
        <h2 style="text-decoration: underline; color:#2b5876" class="mb-3">Yoga Day</h2>
        <div class="col-md-8 mb-5">
            <a href="Img/Events/yoga.png" data-fancybox="Event-img-4">
                <img src="Img/Events/yoga.png" alt="img3" width="750" height="350" style=" border: 2px solid black">
            </a>
        </div>
    </div>

    <h2 style="color: #2b5876; border-bottom: 2px solid #2b5876; width: max-content; font-weight: bolder;" class="pb-2 mb-5">Hostel Day</h2>

    <div class="row">
        <div class="col-md-6 mb-5">
            <a href="Img/Events/hostel-1.png" data-fancybox="Event-img-5">
                <img src="Img/Events/hostel-1.png" alt="img3" width="600" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-6 mb-5">
            <a href="Img/Events/hostel-2.png" data-fancybox="Event-img-5">
                <img src="Img/Events/hostel-2.png" alt="img3" width="600" height="300" style="border: 2px solid black">
            </a>
        </div>
    </div>

    <div class="row">
        <h2 style="text-decoration: underline; color:#2b5876" class="mb-3">World mental health day</h2>
        <div class="col-md-8 mb-5">
            <a href="Img/Events/mental health.png" data-fancybox="Event-img-6">
                <img src="Img/Events/mental health.png" alt="img3" width="750" height="350" style="border: 2px solid black">
        </div>
    </div>

    <div class="row">
        <h2 style="text-decoration: underline; color:#2b5876" class="mb-3">Rainy season special medical camp</h2>
        <div class="col-md-8 mb-5">
            <a href="Img/Events/Rainy Season img.png" data-fancybox="Event-img-7">
                <img src="Img/Events/Rainy Season img.png" alt="img3" width="750" height="350" style="border: 2px solid black">
        </div>
    </div>

</div>
</div>


<!-- Footer -->
<?php include "includes/footer.php" ?>