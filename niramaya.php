<!-- Databases -->
<?php include "db.php" ?>
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

<div class="d-flex justify-content-center mb-5">
    <img src="Img/Niramaya/HeroImg.png" alt="Special Welfare Program" width="100%" class="img-fluid">
</div>

<div class="notify mb-5 mt-5">
    <a class="notifyText" href="#Registration">Note:Register below</a>
</div>


<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">NIRAMAYA</h1>
    </div>
</div>

<div class="niramayaContent container mb-5">
    <p>The National Trust Act 1999 was also promoted the NIRAMAYA Insurance Scheme
which is a specialised scheme for providing insurance packages and policy benefits to
the Intellectual disabilities, in that our ROYALVISION is the only institution for
facilitating this Niramaya Insurance Scheme at Madurai District to facilitate the
intellectual disabilities supported by this insurance through our organisation</p>
</div>

<div class="form_heading mb-5" id="Registration">
    <h1 class="text-center form_heading_line">Registration</h1>
</div>

<div class="container form_container bg-light p-5 mb-5">
    <?php 
        if(isset($_POST['submit'])){
               $stdfirstname = $_POST['stdfirstname'];
               $stdlastname = $_POST['stdlastname'];
               $gender = $_POST['gender'];
               $dob = $_POST['dob'];
               $phonenumber = $_POST['phonenumber'];
               $maritalstatus = $_POST['maritalstatus'];
               $f_m_g_name = $_POST['f_m_g_name'];
               $guardianrelation = $_POST['guardianrelation'];
               $nominee = $_POST['nominee'];
               $BPL = $_POST['BPL'];
               $address = $_POST['address'];

               $max = 2097152;
               $extensionArray = array('png', 'jpg', 'jpeg', 'pdf');
  
               $disabilityCard =  $_FILES['disabilitycard'];
               $disabilityCardName = $disabilityCard['name'];
               $disabilityCardError = $disabilityCard['error'];
               $disabilityCardTemp = $disabilityCard['tmp_name'];
               $disabilityCardExt = explode('.', $disabilityCardName);
               $disabilityCardCheck = strtolower(end($disabilityCardExt));
               // Validation start
               if (!in_array($disabilityCardCheck, $extensionArray)) {
               ?>
                   <script>
                       alert("only jpg/png/jpeg/pdf is allowed");
                   </script>
               <?php
                   exit();
               }
               if ($disabilityCard["size"] > $max) {
               ?>
                   <script>
                       alert("file must be less than 2mb");
                   </script>
           <?php
                   exit();
               }
               // Validation End

               // Upload File
               if (in_array($disabilityCardCheck, $extensionArray)) {
                   $disabilitydestinationFile = 'upload/disabilitycard/'.$phonenumber.'-'. $disabilityCardName;
                   move_uploaded_file($disabilityCardTemp, $disabilitydestinationFile);
               }

            //    Disability Photo
                
               $disabilityphoto =  $_FILES['disabilityphoto'];
               $disabilityphotoName = $disabilityphoto['name'];
               $disabilityphotoError = $disabilityphoto['error'];
               $disabilityphotoTemp = $disabilityphoto['tmp_name'];
               $disabilityphotoExt = explode('.', $disabilityphotoName);
               $disabilityphotoCheck = strtolower(end($disabilityphotoExt));
               // Validation start
               if (!in_array($disabilityphotoCheck, $extensionArray)) {
               ?>
                   <script>
                       alert("only jpg/png/jpeg/pdf is allowed");
                   </script>
               <?php
                   exit();
               }
               if ($disabilityphoto["size"] > $max) {
               ?>
                   <script>
                       alert("file must be less than 2mb");
                   </script>
           <?php
                   exit();
               }
               // Validation End

               // Upload File
               if (in_array($disabilityphotoCheck, $extensionArray)) {
                   $disabilityphotodestinationFile = 'upload/disabilityphoto/'.$phonenumber.'-'. $disabilityphotoName;
                   move_uploaded_file($disabilityphotoTemp, $disabilityphotodestinationFile);
               }

            //    GuardianshipCertificate

            $guardianshipcertificate =  $_FILES['guardianshipcertificate'];
            $guardianshipcertificateName = $guardianshipcertificate['name'];
            $guardianshipcertificateError = $guardianshipcertificate['error'];
            $guardianshipcertificateTemp = $guardianshipcertificate['tmp_name'];
            $guardianshipcertificateExt = explode('.', $guardianshipcertificateName);
            $guardianshipcertificateCheck = strtolower(end($guardianshipcertificateExt));
            // Validation start
            if (!in_array($guardianshipcertificateCheck, $extensionArray)) {
            ?>
                <script>
                    alert("only jpg/png/jpeg/pdf is allowed");
                </script>
            <?php
                exit();
            }
            if ($guardianshipcertificate["size"] > $max) {
            ?>
                <script>
                    alert("file must be less than 2mb");
                </script>
        <?php
                exit();
            }
            // Validation End

            // Upload File
            if (in_array($guardianshipcertificateCheck, $extensionArray)) {
                $guardianshipcertificatedestinationFile = 'upload/guardianshipcertificate/'.$phonenumber.'-'. $guardianshipcertificateName;
                move_uploaded_file($guardianshipcertificateTemp, $guardianshipcertificatedestinationFile);
            }



               $aadharcard =  $_FILES['aadharcard'];
               $aadharcardName = $aadharcard['name'];
               $aadharcardError = $aadharcard['error'];
               $aadharcardTemp = $aadharcard['tmp_name'];
               $aadharcardExt = explode('.', $aadharcardName);
               $aadharcardCheck = strtolower(end($aadharcardExt));

               //upload File
               if (!in_array($aadharcardCheck, $extensionArray)) {
                   ?>
                   <script>
                       alert("only jpg/png/jpeg is allowed");
                   </script>
               <?php
                   exit();
               }
               if ($aadharcard["size"] > $max) {
               ?>
                   <script>
                       alert("file must be less than 2mb");
                   </script>
               <?php
                   exit();
               }
               
               if (in_array($aadharcardCheck, $extensionArray)) {
                   $aadhardestinationFile = 'upload/aadharcard/'.$phonenumber.'-'. $aadharcardName;
                   move_uploaded_file($aadharcardTemp, $aadhardestinationFile);
               }
               
            //    Income Certificate
            $incomecertificate =  $_FILES['incomecertificate'];
            $incomecertificateName = $incomecertificate['name'];
            $incomecertificateError = $incomecertificate['error'];
            $incomecertificateTemp = $incomecertificate['tmp_name'];
            $incomecertificateExt = explode('.', $incomecertificateName);
            $incomecertificateCheck = strtolower(end($incomecertificateExt));

            //upload File
            if (!in_array($incomecertificateCheck, $extensionArray)) {
                ?>
                <script>
                    alert("only jpg/png/jpeg is allowed");
                </script>
            <?php
                exit();
            }
            if ($incomecertificate["size"] > $max) {
            ?>
                <script>
                    alert("file must be less than 2mb");
                </script>
            <?php
                exit();
            }
            
            if (in_array($incomecertificateCheck, $extensionArray)) {
                $incomecertificatedestinationFile = 'upload/incomecertificate/'.$phonenumber.'-'. $incomecertificateName;
                move_uploaded_file($incomecertificateTemp, $incomecertificatedestinationFile);
            }
            
            // Bank Passbook
            $bankpassbook =  $_FILES['bankpassbook'];
            $bankpassbookName = $bankpassbook['name'];
            $bankpassbookError = $bankpassbook['error'];
            $bankpassbookTemp = $bankpassbook['tmp_name'];
            $bankpassbookExt = explode('.', $bankpassbookName);
            $bankpassbookCheck = strtolower(end($bankpassbookExt));

            //upload File
            if (!in_array($bankpassbookCheck, $extensionArray)) {
                ?>
                <script>
                    alert("only jpg/png/jpeg is allowed");
                </script>
            <?php
                exit();
            }
            if ($bankpassbook["size"] > $max) {
            ?>
                <script>
                    alert("file must be less than 2mb");
                </script>
            <?php
                exit();
            }
            
            if (in_array($bankpassbookCheck, $extensionArray)) {
                $bankpassbookdestinationFile = 'upload/bankpassbook/'.$phonenumber.'-'. $bankpassbookName;
                move_uploaded_file($bankpassbookTemp, $bankpassbookdestinationFile);
            }

               $query = "INSERT INTO niramaya (stdfirstname, stdlastname, gender, dob, phonenumber, maritalstatus, f_m_g_name,guardianrelation, nominee, BPL, address, disabilityCard,disabilityphoto, guardianshipcertificate, aadharcard, incomecertificate, bankpassbook) "; 
               $query .= "VALUES('$stdfirstname','$stdlastname','$gender','$dob','$phonenumber','$maritalstatus','$f_m_g_name','$guardianrelation','$nominee','$BPL','$address', '$disabilitydestinationFile' , '$disabilityphotodestinationFile' , '$guardianshipcertificatedestinationFile', '$aadhardestinationFile', '$incomecertificatedestinationFile', '$bankpassbookdestinationFile' )";

               $result = mysqli_query($connection,$query);

                if (!($result)) { // Error handling
                    echo "Something went wrong! :(";
                }
        }
    
    ?>
    <form method="POST" action="niramaya.php" enctype="multipart/form-data">
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="FirstName">Student First Name</label>
                <input type="text" class="form-control" id="FirstName" placeholder="FirstName" name="stdfirstname" required>
            </div>

            <div class="form-group col-md-4">
                <label for="Last Name">Student Last Name</label>
                <input type="text" class="form-control" id="LastName" placeholder="LastName" name="stdlastname" required>
            </div>

            <div class="form-group col-md-4">
                <label for="Gender">Gender</label>
                <select class="form-select" aria-label="Default select example" name="gender" id="Gender" required>
                    <option disabled value="" selected hidden>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="DOB">DOB</label>
                <input type="date" class="form-control" id="DOB" name="dob" required>
            </div>
            <div class="form-group col-md-4">
                <label for="PhoneNumber">PhoneNumber</label>
                <input type="text" class="form-control" id="phoneNumber" name="phonenumber" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Marital Status">Marital status</label>
                    <select class="form-select" id="Marital status" name="maritalstatus" required>
                    <option disabled value="" selected hidden>Marital status</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                </select>
            </div>

        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="FatherName" style="font-size: 13px;">Father Name/Mother Name/Guardian Name (Any one)</label>
                <input type="text" class="form-control" id="FatherName" name="f_m_g_name" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Relation">Guardian Relation</label>
                <input type="text" class="form-control" id="Guardian Relation" name="guardianrelation" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Nominee">Nominee</label>
                <input type="text" class="form-control" id="Nominee" name="nominee"  required>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Disability card" class="form-label">Disability Card</label>
                <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>
                <input class="form-control" type="file" id="Disability card" name="disabilitycard" required>
            </div> 
            <div class="form-group col-md-4">
                <label for="Disability Photo" class="form-label">Disability Photo</label>
                <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>
                <input class="form-control" type="file" id="Disability Photo" name="disabilityphoto" required>
            </div>            
            <div class="form-group col-md-4">
                <label for="Guardianship Certificate" class="form-label">Guardianship Certificate</label>
                <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>
                <input class="form-control" type="file" id="Guardianship Certificate" name="guardianshipcertificate" required>
            </div>                        
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Aadhar Card" class="form-label">Aadhar Card</label>
                <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>
                <input class="form-control" type="file" id="Aadhar Card" name="aadharcard" required>
            </div>    
            <div class="form-group col-md-4">
                <label for="Income Certificate" class="form-label">Income Certificate</label>
                <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>
                <input class="form-control" type="file" id="Income Certificate" name="incomecertificate" required>
            </div> 
            <div class="form-group col-md-4">
                <label for="BankPassbook" class="form-label">BankPassbook (frontpage) </label>
                <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>
                <input class="form-control" type="file" id="BankPassbook" name="bankpassbook" required>
            </div>            
           
        

        </div>

        <div class="row g-3">
            <div class="form-group col-md-4">
            <label for="BPL">BPL</label>
                <select class="form-select" id="BPL" name="BPL" required>
                <option disabled value="" selected hidden>BPL</option>
                    <option value="Yes">Yes <b class="ml-3">Rs-250</b> </option>
                    <option value="No"> No   <b class=" ml-3">Rs-500</b> </option>
                </select>

            </div>
            <div class="form-group col-md-8">
                <label for="Address">Address</label>
                <textarea type="text" class="form-control" id="Address" placeholder="Enter your Address" name="address" required></textarea>
            </div>
        </div>
        <div class="formgroup d-flex justify-content-center mt-4">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary p-3">
        </div>
    </form>

</div>

<!-- Footer -->
<?php include "includes/footer.php" ?>