<?php include "db.php" ?>
<!-- Header -->
<?php include "includes/header.php" ?>

<!-- Navigation -->
<?php include "Component/nav.php" ?>

<!-- Contact us -->
<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">Contact us</h1>
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-1">
            
        </div>
        <div class="col-md-4">
            <p><i class="fas fa-map-marker-alt me-3"></i>No. 2/845, Parampupatti road, SN college post, Perungudi, Madurai 625022</p>
            <p><i class="fas fa-envelope me-3"></i><a href="#">royalvision.mdu@gmail.com </a>
            <p>Members</p>
            <div class="table-responsive">
                <table class="table table-bordered table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Desigination</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ulagasandron</td>
                            <td>Founder</td>
                            <td>9942979649</td>
                        </tr>
                        <tr>
                            <td>S.GovindRaj</td>
                            <td>Project Director</td>
                            <td>7867055999</td>
                        </tr>
                        <tr>
                            <td>K.Valarmathi</td>
                            <td>Executive Director</td>
                            <td>9786166333</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-6 p-2">
            <div class="container bg-light p-4">
                <?php 
                   if(isset($_POST['send'])){
                       $name = mysqli_real_escape_string($connection,$_POST['firstname']);
                       $email = mysqli_real_escape_string($connection,$_POST['email']);
                       $subject = mysqli_real_escape_string($connection, $_POST['subject']);
                       $message = mysqli_real_escape_string($connection,$_POST['message']);

                       $query = "INSERT INTO contactus (sendername,senderemail,subject,message) VALUES ('$name','$email','$subject','$message')";
                       $result = mysqli_query($connection,$query);

                       if(!$result){
                        ?>
                        <script>
                            alert("Something wrong in website please try again later");
                        </script>
                    <?php
                       }

                   }
                ?>
                <form action="contactUs.php" method="POST"> 
                <div class="form-group mb-1">
                    <label for="FirstName">Name</label>
                    <input type="text" class="form-control" id="FirstName" name="firstname" placeholder="FirstName" required>
                </div>
                <div class="form-group mb-1">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group mb-1">
                    <label for="Subject">Subject</label>
                    <input type="text" class="form-control" id="Subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mb-3">
                    <label for="Message">Message</label>
                    <textarea  id="Message"  type="text" name="message" class="form-control"></textarea>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <input type="Submit" value="send" name="send" class="btn btn-danger">
                </div>
              
            </div>

            </form>
        </div>

    </div>
</div>



<!-- Footer -->
<?php include "includes/footer.php" ?>