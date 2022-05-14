<!-- Databases -->
<?php include "db.php" ?>

<!-- Header -->
<?php include "includes/header.php" ?>
<style>
    body {
        min-height: 100vh !important;
    }
</style>
<!-- Nav bar -->
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

<div class="complete-container mt-5">
    <div class="container mb-5">
        <form action="admin.php" method="POST">
            <div class="row p-4" style="border: 2px solid black;">
                <div class="col-md-10">
                    <label for="selectForm">Select to show details</label>
                    <select class="form-select" id="Gender" name="TableName" required>
                        <option disabled value="" selected hidden>Form</option>
                        <option value="specialschool">Special School Form</option>
                        <option value="udidcardform">UDID Card Form</option>
                        <option value="llclgform">Local Level committee Form</option>
                        <option value="niramaya">Niramaya</option>
                        <option value="contactus">Contact Us</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <div class="formgroup d-flex justify-content-center mt-4">
                        <input type="submit" value="Show" name="submit" class="btn btn-small btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $tableName = $_POST['TableName'];

    if ($tableName == 'specialschool') {
?>
        <div class="container">
            <div class="table-responsive">
                <table class="table  table-bordered border-dark table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>DOB</th>
                            <th>PhoneNumber</th>
                            <th>F/M/G/-Name</th>
                            <th>Disability Type</th>
                            <th>Disability Percentage</th>
                            <th>Address</th>
                            <th>Developmental Delay</th>
                            <th>Assistance Required</th>

                        </tr>
                    </thead>
                    <?php
                    $query = "SELECT * FROM {$tableName}";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['std_first_name']; ?></td>
                                <td><?php echo $row['std_last_name']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['phone_number']; ?></td>
                                <td><?php echo $row['f_m_g_name']; ?></td>
                                <td><?php echo $row['disability_type']; ?></td>
                                <td><?php echo $row['disability_percentage']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['developmental_delay']; ?></td>
                                <td><?php echo $row['developmental_delay']; ?></td>

                            </tr>

                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    <?php }
    if ($tableName == 'udidcardform') {
    ?>
        <div class="container">
            <div class="table-responsive">
                <table class="table  table-bordered border-dark table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>DOB</th>
                            <th>PhoneNumber</th>
                            <th>Bloodgroup</th>
                            <th>Markofindentity</th>
                            <th>Maritalstatus</th>
                            <th>F/M/G-name</th>
                            <th>F/M/G-occupation</th>
                            <th>F/M/G-education</th>
                            <th>F/M/G-income</th>
                            <th>Aadharnumber</th>
                            <th>Aadharcard</th>
                            <th>Disabilitycard</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <?php
                    $query = "SELECT * FROM {$tableName}";
                    $result = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $aadharcard = $row['aadharcard'];
                        $disabilitycard = $row['disabilitycard'];

                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['stdfirstname']; ?></td>
                                <td><?php echo $row['stdlastname']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['bloodgroup']; ?></td>
                                <td><?php echo $row['markofindentity']; ?></td>
                                <td><?php echo $row['maritalstatus']; ?></td>
                                <td><?php echo $row['f_m_g_name']; ?></td>
                                <td><?php echo $row['f_m_g_occupation']; ?></td>
                                <td><?php echo $row['f_m_g_education']; ?></td>
                                <td><?php echo $row['f_m_g_income']; ?></td>
                                <td><?php echo $row['aadharnumber']; ?></td>
                                <td>
                                    <?php
                                    $fileExt = explode('.', $aadharcard);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $aadharcard ?>" data-fancybox="">
                                            <img src="<?php echo $aadharcard ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $aadharcard ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>

                                </td>

                                <td>
                                    <?php
                                    $fileExt = explode('.', $disabilitycard);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $disabilitycard ?>" data-fancybox="">
                                            <img src="<?php echo $disabilitycard ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $disabilitycard ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>
                                    <?php  }
                                    ?>

                                </td>
                                <td><?php echo $row['address']; ?></td>


                            </tr>

                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    <?php  }

    if ($tableName == 'llclgform') {
    ?>
        <div class="container">
            <div class="table-responsive">
                <table class="table  table-bordered border-dark table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>PhoneNumber</th>
                            <th>F/M/G/-Name</th>
                            <th>guardianwitness</th>
                            <th>witness</th>
                            <th>gurardianaadharnumber</th>
                            <th>guardianphonenumber</th>
                            <th>guardianmailid</th>
                            <th>maritalstatus</th>
                            <th>disabilitytype</th>
                            <th>address</th>

                            <th>aadharcard</th>
                            <th>medicalcertificate</th>
                            <th>consentcertificate</th>
                            <th>guardianphoto</th>
                            <th>combinedphoto</th>
                            <th>pwdphoto</th>
                            <th>disabilitycard</th>
                        </tr>
                    </thead>
                    <?php
                    $query = "SELECT * FROM {$tableName}";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $aadharcard = $row['aadharcard'];
                        $medicalcertificate = $row['medicalcertificate'];
                        $consentcertificate = $row['consentcertificate'];
                        $guardianphoto = $row['guardianphoto'];
                        $combinedphoto = $row['combinedphoto'];
                        $pwdphoto = $row['pwdphoto'];
                        $disabilitycard = $row['disabilitycard'];

                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['stdfirstname']; ?></td>
                                <td><?php echo $row['stdlastname']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['f_m_g_name']; ?></td>
                                <td><?php echo $row['guardianwitness']; ?></td>
                                <td><?php echo $row['witness']; ?></td>
                                <td><?php echo $row['gurardianaadharnumber']; ?></td>
                                <td><?php echo $row['guardianphonenumber']; ?></td>
                                <td><?php echo $row['guardianmailid']; ?></td>
                                <td><?php echo $row['maritalstatus']; ?></td>
                                <td><?php echo $row['disabilitytype']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>
                                    <?php
                                    $fileExt = explode('.', $row['aadharcard_name']);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $aadharcard ?>" data-fancybox="">
                                            <img src="<?php echo $aadharcard ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $aadharcard ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    $fileExt = explode('.', $row['medicalcertificate_name']);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $medicalcertificate ?>" data-fancybox="">
                                            <img src="<?php echo $medicalcertificate ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $medicalcertificate ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>
                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    $fileExt = explode('.', $row['consentcertificate_name']);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $consentcertificate ?>" data-fancybox="">
                                            <img src="<?php echo $consentcertificate ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $consentcertificate ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>
                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    $fileExt = explode('.', $row['guardianphoto_name']);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $guardianphoto ?>" data-fancybox="">
                                            <img src="<?php echo $guardianphoto ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $guardianphoto ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>
                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    $fileExt = explode('.', $row['combinedphoto_name']);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $combinedphoto ?>" data-fancybox="">
                                            <img src="<?php echo $combinedphoto ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $combinedphoto ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>
                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    $fileExt = explode('.', $row['pwdphoto_name']);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $pwdphoto ?>" data-fancybox="">
                                            <img src="<?php echo $pwdphoto ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $pwdphoto ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>
                                    <?php  }
                                    ?>

                                </td>

                                <td>
                                    <?php
                                    $fileExt = explode('.', $row['disabilitycard_name']);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $disabilitycard ?>" data-fancybox="">
                                            <img src="<?php echo $disabilitycard ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $disabilitycard ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>
                                    <?php  }
                                    ?>

                                </td>
                            </tr>

                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>


    <?php }
    if ($tableName == 'niramaya') {
    ?>
        <div class="container">
            <div class="table-responsive">
                <table class="table  table-bordered border-dark table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>PhoneNumber</th>
                            <th>Marital Status</th>
                            <th>F/M/G/-Name</th>
                            <th>Guardian Relation</th>
                            <th>Nominee</th>
                            <th>BPL</th>
                            <th>Address</th>
                            <th>DisabilityCard</th>
                            <th>DisabilityPhoto</th>
                            <th>GuardianshipCertificate</th>
                            <th>Aadharcard</th>
                            <th>IncomeCertificate</th>
                            <th>BankPassbook</th>

                        </tr>
                    </thead>
                    <?php
                    $query = "SELECT * FROM {$tableName}";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result)) {

                        $disabilityCard = $row['disabilityCard'];
                        $disabilityphoto = $row['disabilityphoto'];
                        $guardianshipcertificate = $row['guardianshipcertificate'];
                        $aadharcard = $row['aadharcard'];
                        $incomecertificate = $row['incomecertificate'];
                        $bankpassbook = $row['bankpassbook'];                        
                        


                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['stdfirstname']; ?></td>
                                <td><?php echo $row['stdlastname']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['maritalstatus']; ?></td>
                                <td><?php echo $row['f_m_g_name']; ?></td>
                                <td><?php echo $row['guardianrelation']; ?></td>
                                <td><?php echo $row['nominee']; ?></td>
                                <td><?php echo $row['BPL']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>
                                <?php
                                    $fileExt = explode('.', $disabilityCard);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $disabilityCard ?>" data-fancybox="">
                                            <img src="<?php echo $disabilityCard ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $disabilityCard ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                <?php
                                    $fileExt = explode('.', $disabilityphoto);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $disabilityphoto ?>" data-fancybox="">
                                            <img src="<?php echo $disabilityphoto ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $disabilityphoto ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                <?php
                                    $fileExt = explode('.', $guardianshipcertificate);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $guardianshipcertificate ?>" data-fancybox="">
                                            <img src="<?php echo $guardianshipcertificate ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $guardianshipcertificate ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>

                                </td>
                                <td>
                                    
                                    <?php
                                    $fileExt = explode('.', $aadharcard);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $aadharcard ?>" data-fancybox="">
                                            <img src="<?php echo $aadharcard ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $aadharcard ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>


                                </td>
                                <td>
                                <?php
                                    $fileExt = explode('.', $incomecertificate);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $incomecertificate ?>" data-fancybox="">
                                            <img src="<?php echo $incomecertificate ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $incomecertificate ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>
                                </td>
                                <td>
                                <?php
                                    $fileExt = explode('.', $bankpassbook);
                                    $fileCheck = strtolower(end($fileExt));
                                    if (in_array($fileCheck, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <a href="<?php echo $bankpassbook ?>" data-fancybox="">
                                            <img src="<?php echo $bankpassbook ?>" alt="img1" width="100">
                                        </a>
                                    <?php } else {
                                    ?>
                                        <a href="<?php echo $bankpassbook ?>" data-fancybox="">
                                            <img src="Img/pdf.jpg" width="100%" height="200px" class="img-fluid" />
                                        </a>


                                    <?php  }
                                    ?>


                                </td>

                            </tr>

                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>


    <?php }
    if ($tableName == 'contactus') {
    ?>
        <div class="container">
            <div class="table-responsive">
                <table class="table  table-bordered border-dark table-bordered">
                    <thead>
                        <tr>
                            <th>Sender Name</th>
                            <th>Sender email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <?php

                    $query = "SELECT * FROM {$tableName}";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['sendername'] ?></td>
                                <td><?php echo $row['senderemail'] ?></td>
                                <td><?php echo $row['subject'] ?></td>
                                <td><?php echo $row['message'] ?></td>
                            </tr>
                        </tbody>
                    <?php   } ?>
                </table>
            </div>
        </div>
    <?php } ?>
<?php } ?>

<?php include "includes/footer.php" ?>