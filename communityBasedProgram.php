<!-- Header -->
<?php include "includes/header.php" ?>

<!--  -->
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
    <img src="Img/CommuityBased/HeroImg.png" alt="Special Welfare Program" width="100%" class="img-fluid">
</div>


<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">COMMUNITY BASED PROGRAM</h1>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <p class="mb-5">
            ROYALVISION has been conducting a Community Based Rehabilitation (CBR) program in
            Thiruparankundram block of Madurai District for the welfare of the PWDs of all kinds. The
            purpose of the CBR is to facilitate our service performances to the unreached beneficiaries
            located in other parts of the district. This CBR camps are regularly organised to identify the
            needs of the persons with disabilities based on which the organization designs and executes
            the welfare measures such as obtaining disability card, physically handicapped pension,UDID
            card ,maintenance grants , and monthly honorarium to the unemployed youths, medical
            services, health check-ups, scholarship assistance, skill training, loan for self-employment
            etc., Since the COVID 19 pandemic and the SOP (Standard Operating Procedure) had been
            strictly followed by our staffs of ROYALVISION in this CBR program. The selected
            beneficiaries are referred to reputed institutions and mainstream with government welfare
            schemes for further support and assistance. Under this project the disability identity card has been issued to PWDs, 100% maintenance grant has been obtained and about 27 differently
            abled persons are registered under TN Differently Abled Person's Welfare Board. A 100%
            survey in our targeted areas enabled us to prepare an error free individual bio-data is provided for differently abled persons are benefited directly and indirectly through this service program.</p>

        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">World mental health</h2>
            <a href="Img/CommuityBased/img1.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img1.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Rainy season special medical camp</h2>
            <a href="Img/CommuityBased/img2.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img2.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Eye donation certificate distribution</h2>
            <a href="Img/CommuityBased/img3.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img3.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Blood donation awareness</h2>
            <a href="Img/CommuityBased/img4.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img4.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Awareness on green environment</h2>
            <a href="Img/CommuityBased/img5.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img5.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Election awareness</h2>
            <a href="Img/CommuityBased/img6.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img6.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Election awareness</h2>
            <a href="Img/CommuityBased/img7.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img7.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">UDIDAwareness on Rights of Persons with Disability Act</h2>
            <a href="Img/CommuityBased/img8.png" data-fancybox="img" data-title="My caption">
                <img src="Img/CommuityBased/img8.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>

    </div>
</div>

<!-- Footer -->
<?php include "includes/footer.php" ?>