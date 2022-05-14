
<?php

// session_start();

// @include '../db.php';

// if(!isset($_SESSION['name']) || !$_SESSION['usertype']=='User'){
//     if(!headers_sent()){
//         header('location:index.php');
//     }else{
//         echo '<script type="text/javascript">windows.location.href="index.php"</script>';
//     }
//  }

?>
<nav class="navbar navbar-expand-lg navbar-dark nav-padding nav-color sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="Img/logo.png" alt="" height="45px">
        </a>
        <button class="navbar-toggler navbar-toggler-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-toggler-icon-color"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-4 nav-center">
                <li class="nav-item rounded">
                    <a class="nav-link hover-en" href="index.php">Home</a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link hover-en" href="About.php">About us</a>
                </li>
                <li class="nav-item dropdown rounded">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="specialSchool.php">Special school</a></li>
                        <li><a class="dropdown-item" href="rehabilationCenter.php">Rehabilitation Centre</a></li>
                        <li><a class="dropdown-item" href="specialWelfareProgram.php">Special welfare program</a></li>
                        <li><a class="dropdown-item" href="communityBasedProgram.php">Community Based program</a></li>
                        <li><a class="dropdown-item" href="llclg.php">Local Level Committe and Legal Guardianship</a></li>
                        <li><a class="dropdown-item" href="niramaya.php">Niramaya</a></li>
                    </ul>
                </li>

                <li class="nav-item rounded">
                    <a class="nav-link hover-en" href="AudioLibrary.php">Audio Library</a>
                </li>

                <li class="nav-item rounded">
                    <a class="nav-link hover-en" href="https://royalvisiontrust.org/donate.html" target="_blank_">Donate</a>
                </li>

                <li class="nav-item dropdown rounded">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Activities</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Awards.php">Awards</a></li>
                        <li><a class="dropdown-item" href="certificate.php">Certificates</a></li>
                        <li><a class="dropdown-item" href="Events.php">Events</a></li>

                    </ul>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link hover-en" href="contactUs.php">Contact us</a>
                </li>
                <li class='nav-item dropdown rounded'>
                            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Profile</a>
                            <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='navbarDropdown'>
                                <li><a class='dropdown-item' href='login.php'>Login</a></li>
                                <li><a class='dropdown-item' href='register.php'>signup</a></li>
                            </ul>
                </li>;

            </ul>
        </div>
    </div>
</nav>