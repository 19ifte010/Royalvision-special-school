<!-- Database -->
<?php include "db.php" ?>

<!-- Header -->
<?php include "includes/header.php" ?>

<!-- Navigation -->
<?php include "Component/nav.php" ?>

<div class="d-flex justify-content-center mb-5">
    <img src="Img/LLCLG/HeroImg.png" alt="Special Welfare Program" width="100%" class="img-fluid">
</div>
<div class="notify mb-5 mt-5">
    <a class="notifyText" href="#Registration">Note:Register below</a>
</div>

<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">LLC(Local Level Committee) and LG(Legal Guardianship)</h1>
    </div>
</div>
<div class="container">

   <h1 style="text-decoration: underline; color:#2b5876">Local Level Committee</h1>
   <p style="text-indent: 40px;">LLCs  have been advised to include following as co-opted members in addition to the statutory members to assist them in their functioning</p>
   <ol class="list-group list-group-numbered mb-3">
       <li class="list-group-item p-3">District Social Justice Officer/District Welfare Officer/District Rehabilitation Officer</li>
       <li class="list-group-item p-3">Civil Surgeon or Chief Medical Officer</li>
       <li class="list-group-item p-3">A Psychiatrist of the District Hospital</li>
       <li class="list-group-item p-3">Reputed Lawyer in the district</li>
   </ol>
   <p style="text-indent: 40px;">Apart from above LLC could involve any other Govt. Officer or Disability Experts for rendering justice to the case and effective functioning.</p>
</div>


<div class="llclgContent container mb-5">
    <ul class="list-group list-group-numbered">
        <li class="list-group-item p-3">Royalvision operates on a local level committee set up under the National Trust Act 1999.our organization is on NGO member of this group of 4 people headed by the District collector</li>
        <li class="list-group-item p-3">We are in the process of appointing a legal guardian for intellectual disability, autism, cerebral palsy and multiple disability classified under the National Trust Act 1999</li>
        <li class="list-group-item p-3">Applications received online for the above persons will be personally reviewed by the staff member of our organization and it is recommended to the District collector to issue guardianship certificates.</li>
        <li class="list-group-item p-3">Under the scheme currently we are working in Madurai and Thoothukudi districts a local level committees headed by the District collector respective districts</li>
    </ul>
</div>

<div class="form_heading mb-5" id="Registration">
    <h1 class="text-center form_heading_line">Registration</h1>
</div>
<div class="container form_container bg-light p-5 mb-5">
    <?php

    if (isset($_POST['submit'])) {

        $stdfirstname = $_POST['stdfirstname'];
        $stdlastname = $_POST['stdlastname'];
        $gender = $_POST['gender'];

        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $phonenumber = $_POST['phonenumber'];

        $f_m_g_name = $_POST['f_m_g_name'];
        $guardianwitness = $_POST['guardianwitness'];
        $witness = $_POST['witness'];

        $gurardianaadharnumber = $_POST['gurardianaadharnumber'];
        $guardianphonenumber = $_POST['guardianphonenumber'];
        $guardianmailid = $_POST['guardianmailid'];

        $maritalstatus = $_POST['maritalstatus'];
        $disabilitytype = $_POST['disabilitytype'];
        $address = $_POST['address'];

        //Images
        $max = 2097152;
        $extensionArray = array('png', 'jpg', 'jpeg', 'pdf');

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
                alert("only jpg/png/jpeg/pdf is allowed");
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
            $aadhardestinationFile = 'upload/aadharcard/'.$email.'-'.$aadharcardName;
            move_uploaded_file($aadharcardTemp, $aadhardestinationFile);
        }

        //Medical certificate
        $medicalcertificate =  $_FILES['medicalcertificate'];
        $medicalcertificateName = $medicalcertificate['name'];
        $medicalcertificateError = $medicalcertificate['error'];
        $medicalcertificateTemp = $medicalcertificate['tmp_name'];
        $medicalcertificateExt = explode('.', $medicalcertificateName);
        $medicalcertificateCheck = strtolower(end($medicalcertificateExt));

        if (!in_array($medicalcertificateCheck, $extensionArray)) {
            ?>
            <script>
                alert("only jpg/png/jpeg/pdf is allowed");
            </script>
        <?php
            exit();
        }
        if ($medicalcertificate["size"] > $max) {
        ?>
            <script>
                alert("file must be less than 2mb");
            </script>
        <?php
            exit();
        }
        // Upload File
        if (in_array($medicalcertificateCheck, $extensionArray)) {
            $medicalcertificatedestinationFile = 'upload/medicalcertificate/'.$email.'-'.$medicalcertificateName;
            move_uploaded_file($medicalcertificateTemp, $medicalcertificatedestinationFile);
        }


        //consentcertificate
        $consentcertificate =  $_FILES['consentcertificate'];
        $consentcertificateName = $consentcertificate['name'];
        $consentcertificateError = $consentcertificate['error'];
        $consentcertificateTemp = $consentcertificate['tmp_name'];
        $consentcertificateExt = explode('.', $consentcertificateName);
        $consentcertificateCheck = strtolower(end($consentcertificateExt));

        //upload File
        if (!in_array($consentcertificateCheck, $extensionArray)) {
            ?>
            <script>
                alert("only jpg/png/jpeg/pdf is allowed");
            </script>
        <?php
            exit();
        }
        if ($consentcertificate["size"] > $max) {
        ?>
            <script>
                alert("file must be less than 2mb");
            </script>
        <?php
            exit();
        }
        
        if (in_array($consentcertificateCheck, $extensionArray)) {
            $consentcertificatedestinationFile = 'upload/consentcertificate/'.$email.'-'.$consentcertificateName;
            move_uploaded_file($consentcertificateTemp, $consentcertificatedestinationFile);
        }


        //guardianphoto
        $guardianphoto =  $_FILES['guardianphoto'];
        $guardianphotoName = $guardianphoto['name'];
        $guardianphotoError = $guardianphoto['error'];
        $guardianphotoTemp = $guardianphoto['tmp_name'];
        $guardianphotoExt = explode('.', $guardianphotoName);
        $guardianphotoCheck = strtolower(end($guardianphotoExt));

        //upload File
        if (!in_array($guardianphotoCheck, $extensionArray)) {
            ?>
            <script>
                alert("only jpg/png/jpeg/pdf is allowed");
            </script>
        <?php
            exit();
        }
        if ($guardianphoto["size"] > $max) {
        ?>
            <script>
                alert("file must be less than 2mb");
            </script>
        <?php
            exit();
        }
        
        if (in_array($guardianphotoCheck, $extensionArray)) {
            $guardianphotodestinationFile = 'upload/guardianphoto/'.$email.'-'.$guardianphotoName;
            move_uploaded_file($guardianphotoTemp, $guardianphotodestinationFile);
        }



        //combinedphoto
        $combinedphoto =  $_FILES['combinedphoto'];
        $combinedphotoName = $combinedphoto['name'];
        $combinedphotoError = $combinedphoto['error'];
        $combinedphotoTemp = $combinedphoto['tmp_name'];
        $combinedphotoExt = explode('.', $combinedphotoName);
        $combinedphotoCheck = strtolower(end($combinedphotoExt));

        //upload File
        if (!in_array($combinedphotoCheck, $extensionArray)) {
            ?>
            <script>
                alert("only jpg/png/jpeg/pdf is allowed");
            </script>
        <?php
            exit();
        }
        if ($combinedphoto["size"] > $max) {
        ?>
            <script>
                alert("file must be less than 2mb");
            </script>
        <?php
            exit();
        }
        
        if (in_array($combinedphotoCheck, $extensionArray)) {
            $combinedphotodestinationFile = 'upload/combinedphoto/'.$email.'-'.$combinedphotoName;
            move_uploaded_file($combinedphotoTemp, $combinedphotodestinationFile);
        }

        ///pwdphoto
        $pwdphoto =  $_FILES['pwdphoto'];
        $pwdphotoName = $pwdphoto['name'];
        $pwdphotoError = $pwdphoto['error'];
        $pwdphotoTemp = $pwdphoto['tmp_name'];
        $pwdphotoExt = explode('.', $pwdphotoName);
        $pwdphotoCheck = strtolower(end($pwdphotoExt));

        //upload File
        if (!in_array($pwdphotoCheck, $extensionArray)) {
            ?>
            <script>
                alert("only jpg/png/jpeg/pdf is allowed");
            </script>
        <?php
            exit();
        }
        if ($pwdphoto["size"] > $max) {
        ?>
            <script>
                alert("file must be less than 2mb");
            </script>
        <?php
            exit();
        }
        
        if (in_array($pwdphotoCheck, $extensionArray)) {
            $pwdphotodestinationFile = 'upload/pwdphoto/'.$email.'-'.$pwdphotoName;
            move_uploaded_file($pwdphotoTemp, $pwdphotodestinationFile);
        }
       
        //disabilitycard
        $disabilitycard =  $_FILES['disabilitycard'];
        $disabilitycardName = $disabilitycard['name'];
        $disabilitycardError = $disabilitycard['error'];
        $disabilitycardTemp = $disabilitycard['tmp_name'];
        $disabilitycardExt = explode('.', $disabilitycardName);
        $disabilitycardCheck = strtolower(end($disabilitycardExt));

        //upload File
        if (!in_array($disabilitycardCheck, $extensionArray)) {
            ?>
            <script>
                alert("only jpg/png/jpeg/pdf is allowed");
            </script>
        <?php
            exit();
        }
        if ($disabilitycard["size"] > $max) {
        ?>
            <script>
                alert("file must be less than 2mb");
            </script>
        <?php
            exit();
        }
        
        if (in_array($disabilitycardCheck, $extensionArray)) {
            $disabilitycarddestinationFile = 'upload/disabilitycard/'.$email.'-'.$disabilitycardName;
            move_uploaded_file($disabilitycardTemp, $disabilitycarddestinationFile);
        }


        $query = "INSERT INTO llclgform (stdfirstname,stdlastname,gender,email,dob,phonenumber,f_m_g_name,guardianwitness,witness,gurardianaadharnumber,guardianphonenumber,guardianmailid,maritalstatus,disabilitytype,address,aadharcard,aadharcard_name,medicalcertificate,medicalcertificate_name,consentcertificate,consentcertificate_name,guardianphoto,guardianphoto_name,combinedphoto,combinedphoto_name,pwdphoto,pwdphoto_name,disabilitycard,disabilitycard_name) ";
        $query .= "VALUES('$stdfirstname','$stdlastname','$gender','$email','$dob','$phonenumber','$f_m_g_name','$guardianwitness','$witness','$gurardianaadharnumber','$guardianphonenumber','$guardianmailid','$maritalstatus','$disabilitytype','$address','$aadhardestinationFile','$aadharcardName','$medicalcertificatedestinationFile','$medicalcertificateName','$consentcertificatedestinationFile','$consentcertificateName','$guardianphotodestinationFile','$guardianphotoName','$combinedphotodestinationFile','$combinedphotoName','$pwdphotodestinationFile','$pwdphotoName','$disabilitycarddestinationFile','$disabilitycardName')";

        $result = mysqli_query($connection, $query);

        if (!($result)) { // Error handling
            echo "Something went wrong! :(";
        }
    }

    ?>
    <form method="POST" action="llclg.php" enctype="multipart/form-data">
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
                <select class="form-select" aria-label="Default select example" id="Gender" name="gender">
                    <option disabled value="" selected hidden>Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>

                </select>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Email">Email id</label>
                <input type="text" class="form-control" id="Email" name="email" required>
            </div>
            <div class="form-group col-md-4">
                <label for="DOB">DOB</label>
                <input type="date" class="form-control" id="DOB" name="dob" required>
            </div>
            <div class="form-group col-md-4">
                <label for="PhoneNumber">PhoneNumber</label>
                <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number" name="phonenumber" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="FatherName" style="font-size: 13px;">Father Name/Mother Name/Guardian Name (Any one)</label>
                <input type="text" class="form-control" id="FatherName" name="f_m_g_name">
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Witness">Guardian Witness</label>
                <input type="text" class="form-control" id="Guardian Witness" name="guardianwitness">

            </div>
            <div class="form-group col-md-4">
                <label for="Witness">Another Witness</label>
                <input type="text" class="form-control" id="Witness" name="witness">
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Aadhar Card" class="form-label">Aadhar Card</label>
                <input class="form-control" type="file" id="Aadhar Card" name="aadharcard" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Medical Certificate" class="form-label">Medical Certificate</label>
                <input class="form-control" type="file" id="Medical Certificate" name="medicalcertificate" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Consent Certificate" class="form-label">Consent Certificate</label>
                <input class="form-control" type="file" id="Consent Certificate" name="consentcertificate" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Guardian Photo" class="form-label">Guardian Photo</label>
                <input class="form-control" type="file" id="Guardian Photo" name="guardianphoto" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Combined Photo" class="form-label">Combined Photo</label>
                <input class="form-control" type="file" id="Combined Photo" name="combinedphoto" required>
            </div>
            <div class="form-group col-md-4">
                <label for="PWD Photo" class="form-label">PWD Photo</label>
                <input class="form-control" type="file" id="PWD Photo" name="pwdphoto" required>
            </div>
        </div>

        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Guardian Aadhar Number">Guardian Aadhar Number</label>
                <input type="text" class="form-control" id="Guardian Aadhar Number" name="gurardianaadharnumber" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Phone Number">Guardian Phone Number</label>
                <input type="text" class="form-control" id="Guardian Phone Number" name="guardianphonenumber" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Mail id">Guardian Mail id</label>
                <input type="email" class="form-control" id="Guardian Mail id" name="guardianmailid" required>
            </div>
        </div>

        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Marital Status">Marital status</label>
                <select class="form-select" id="Marital status" name="maritalstatus" required>
                    <option disabled value="" selected hidden>Marital status</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="Disability Type">Disability Type</label>
                <input type="text" class="form-control" id="Disability Type" name="disabilitytype" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Disability card" class="form-label">Disability Card</label>
                <input class="form-control" type="file" id="Disability card" name="disabilitycard" required>
            </div>
        </div>

        <div class="row g-3">

        </div>

        <div class="row g-3">
            <div class="form-group">
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