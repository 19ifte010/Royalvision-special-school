<?php include "db.php" ?>
<!-- Header -->
<?php include "includes/header.php" ?>

<!-- navigation -->
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
    <img src="Img/RehabilationCenter/HeroImg.png" alt="Rehabilation Center" width="100%" class="img-fluid">
</div>

<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">REHABILITATION CENTER</h1>
    </div>
</div>
<div class="rehabCenter">
    <div class="container mb-5">
        <h2 class="text-center mb-3">Services</h2>
        <div class="row">
            <div class="service-1 services mb-5">
                <p>UD ID Card</p>
                <button type="button" class="btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal">Apply</button>
            </div>

        </div>
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Registration Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php   

                        if (isset($_POST['submit'])) {

                            $stdfirstname = $_POST['stdfirstname'];
                            $stdlastname = $_POST['stdlastname'];
                            $gender = $_POST['gender'];
                            $age = $_POST['age'];
                            $dob = $_POST['dob'];
                            $phonenumber = $_POST['phonenumber'];
                            $bloodgroup = $_POST['bloodgroup'];
                            $markofindentity = $_POST['markofindentity'];
                            $maritalstatus = $_POST['maritalstatus'];
                            $f_m_g_name = $_POST['f_m_g_name'];
                            $f_m_g_occupation = $_POST['f_m_g_occupation'];
                            $f_m_g_education = $_POST['f_m_g_education'];
                            $f_m_g_income = $_POST['f_m_g_income'];
                            $aadharnumber = $_POST['aadharnumber'];
                            $address = $_POST['address'];

                            // Images
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


                            $query = "INSERT INTO udidcardform (stdfirstname,stdlastname,gender,age,dob,phonenumber,bloodgroup,markofindentity,maritalstatus,f_m_g_name,f_m_g_occupation,f_m_g_education,f_m_g_income,aadharnumber,aadharcard,disabilitycard,address) ";
                            $query .= "VALUES('$stdfirstname','$stdlastname','$gender','$age','$dob','$phonenumber','$bloodgroup','$markofindentity','$maritalstatus','$f_m_g_name','$f_m_g_occupation','$f_m_g_education','$f_m_g_income','$aadharnumber','$aadhardestinationFile','$disabilitydestinationFile','$address')";

                            $result = mysqli_query($connection, $query);

                            if (!($result)) { // Error handling
                                echo "Something went wrong! :(";
                            }
                        }

                        ?>

                        <form method="POST" action="rehabilationCenter.php" enctype="multipart/form-data">
                            <div class="row g-5">
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
                                    <select class="form-select" aria-label="Default select example" id="Gender" name="gender" required>
                                        <option disabled value="" selected hidden>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-5">
                                <div class="form-group col-md-4">
                                    <label for="Age">Age</label>
                                    <input type="number" class="form-control" id="Age" name="age" required>
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

                            <div class="row g-5">
                                <div class="form-group col-md-4">
                                    <label for="Blood group">Blood Group</label>
                                    <input type="text" class="form-control" id="Blood group" name="bloodgroup" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Mark Of Identification">Mark Of Identification</label>
                                    <input type="text" class="form-control" id="Mark Of Identification" name="markofindentity" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Marital Status">Marital status</label>
                                    <select class="form-select" id="Marital status" name="maritalstatus" required>
                                        <option disabled value="" selected hidden>Marital Status</option>
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-5">
                                <div class="form-group col-md-6">
                                    <label for="FatherName">Father Name/Mother Name/Guardian Name (Any one)</label>
                                    <input type="text" class="form-control" id="FatherName" name="f_m_g_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="FatherNameOccupation">Father Name/Mother Name/Guardian occupation (Any one)</label>
                                    <input type="text" class="form-control" id="FatherNameOccupation" name="f_m_g_occupation" required>
                                </div>
                            </div>

                            <div class="row g-5">
                                <div class="form-group col-md-6">
                                    <label for="FatherNameEdu">Father Name/Mother Name/Guardian education (Any one)</label>
                                    <input type="text" class="form-control" id="FatherNameEducation" name="f_m_g_education" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="FatherNameIncome">Father Name/Mother Name/Guardian Income (Any one)</label>
                                    <input type="text" class="form-control" id="FatherNameIncome" name="f_m_g_income" required>
                                </div>
                            </div>

                            <div class="row g-5">
                                <div class="form-group col-md-4">
                                    <label for="Aadhar card Number">Aadhar card Number</label>
                                    <input type="text" class="form-control" id="Aadhar card Number" name="aadharnumber" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Aadhar Card" class="form-label">Aadhar Card</label>
                                    <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>
                                    <input class="form-control" type="file" name="aadharcard" id="Aadhar Card" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Disability card" class="form-label">Disability Card</label>
                                    <small class="disable">(file size must be less than 1mb & only jgp/png/jpeg format is allowed)</small>

                                    <input class="form-control" type="file" id="Disability card" name="disabilitycard" required>
                                </div>
                            </div>

                            <div class="row g-5">
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea type="text" class="form-control" id="Address" placeholder="Enter your Address" name="address" required></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <input type="Submit" value="submit" class="btn btn-primary p-3" name="submit">

                    </div>
                    </form>
                </div>

            </div>
        </div>
        <marquee class="text-danger mb-5">
            <h3>NOTE: Bring Disability card and VO certificate for other services to our office</h3>
        </marquee>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">UDID card distribution</h2>
                    <a href="Img/RehabilationCenter/UDIDCard.png" data-fancybox="img" data-title="My caption">
                        <img src="Img/RehabilationCenter/UDIDCard.png" alt="img1" width="300" height="300" style="border: 2px solid black">
                    </a>
                </div>
                <div class="col-md-4 mb-5">
                    <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Cash distribution</h2>

                    <a href="Img/RehabilationCenter/CashDistribution.png" data-fancybox="img" data-title="My caption">
                        <img src="Img/RehabilationCenter/CashDistribution.png" alt="img2" width="300" height="300" style="border: 2px solid black">
                    </a>
                </div>
            </div>
        </div>
        <div class="servicesList">
            <div class="row">
                <div class="col-md-6">
                    <div class="services service-2">
                        <p>National ID card</p>
                    </div>
                    <div class="services service-2">
                        <p>Bus Pass</p>
                    </div>
                    <div class="services service-2">
                        <p>Railway concession and Smart card</p>
                    </div>
                    <div class="services service-2">
                        <p>Aid and Appliances</p>
                    </div>
                    <div class="services service-2">
                        <p>Physically Handicapped Pension(T.P le only)</p>
                    </div>  
                    <div class="services service-2">
                        <p>Maintenance Grants for Disabled Persons</p>
                    </div>
                    <div class="services service-2">
                        <p>Scholarships</p>
                    </div>
                    <div class="services service-2">
                        <p>Health Insurance Scheme for PWD's</p>
                    </div>
                    <div class="services service-2">
                        <p>Scribe</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services service-2">
                        <p>Placement Services</p>
                    </div>
                    <div class="services service-2">
                        <p>Reading and Recording</p>
                    </div>
                    <div class="services service-2">
                        <p>Braille & audio books</p>
                    </div>
                    <div class="services service-2">
                        <p>Legal Advocacy</p>
                    </div>
                    <div class="services service-2">
                        <p>Guidance and counciling</p>
                    </div>
                    <div class="services service-2">
                        <p>Therapy for myopathy patients</p>
                    </div>
                    <div class="services service-2">
                        <p>Yoga for PWD'S</p>
                    </div>
                    <div class="services service-2">
                        <p>Basic Computer Training</p>
                    </div>
                    <div class="services service-2">
                        <p>Spoken English Classes</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services service-2">
                        <p class="text-center">Marriage assistance scheme for differently abled</p>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>



<!-- Footer -->
<?php include "includes/footer.php" ?>