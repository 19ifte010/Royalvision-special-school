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

<div class="d-flex justify-content-center">
    <img src="Img/SpecialWelfare/HeroImg.png" alt="Special Welfare Program" width="100%" class="img-fluid">
</div>

<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">SPECIAL WELFARE PROGRAM FOR DIFFERENTLY ABLED</h1>
    </div>
    <div class="container">
        <p class="mb-5">The Social service of ROYALVISION Trust does not end with the work of upliftment of the differently abled and visually impaired individuals. In fact it extends beyond that to take care of their families too. A survey of their families was first made to recognize and identify the BPL families among them. The families with more than one differently abled person are
        identified. Finally the families with less than a monthly income of Rs.5000/- are short listed
        from among which 50 families are finally selected to be helped. All the chosen families are
        freely provided with the necessary and 21 types of grocery items every month. All the
        expenses incurred in the payment of educational tuition fees, Purchase of books, exam fees
        and uniforms are fully met with by Royalvision trust. During festive occasions the differently
        abled are provided with new dresses. The visually impaired in those families are given the
        white cane free of cost every year on the white cane day
        </p>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Dress distribution</h2>
            <a href="Img/SpecialWelfare/DressDistribution.png" data-fancybox="img" data-title="My caption">
                <img src="Img/SpecialWelfare/DressDistribution.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Rice with grocery</h2>
            <a href="Img/SpecialWelfare/RiceWithGrossery-1.png" data-fancybox="img" data-title="My caption">
                <img src="Img/SpecialWelfare/RiceWithGrossery-1.png" alt="img2" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Rice with grocery</h2>
            <a href="Img/SpecialWelfare/RiceWithGrossery-2.png" data-fancybox="img" data-title="My caption">
                <img src="Img/SpecialWelfare/RiceWithGrossery-2.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Welfare program</h2>
            <a href="Img/SpecialWelfare/WelfareProgram.png" data-fancybox="img" data-title="My caption">
                <img src="Img/SpecialWelfare/WelfareProgram.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>

    </div>
</div>



<!-- Footer -->
<?php include "includes/footer.php" ?>