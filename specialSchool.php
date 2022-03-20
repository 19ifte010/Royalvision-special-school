<!-- Header -->
<?php include 'includes/header.php' ?>

<!-- nav -->
<?php include 'Component/nav.php' ?>



<div class="d-flex justify-content-center">
    <img src="Img/specialSchool/HeroImg.png" alt="Special School" width="100%" class="img-fluid">
</div>

<div class="notify mb-5 mt-5">
    <a class="notifyText" href="#Registration">Note:Register below</a>
</div>

<!-- Page content -->
<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">Special school</h1>
        <p class="text-center sps">(special school for the multiple disabilities)</p>
    </div>
    <div class="container">
        <p class="mb-5">Royal vision runs a dedicated and fully structured special education program our aims at maximizing the potential of children. The program covers specific areas of functional academics and functional training, therapeutics(including physical and occupational therapy) and co-curricular activities. In addition, there are specific programs offering vocational training for older children. Socialization and extra curricular activities for all children. Our organization has been running and special school for the disabled childrens.</p>
    </div>
</div>


<?php include "db.php" ?>

<?php
if (isset($_POST['submit'])) {
    // Varibales
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $phonenumber = $_POST['phonenumber'];
    $f_m_g_name = $_POST['f_m_g_name'];
    $disabilitytype = $_POST['disabilitytype'];
    $disabilitypercentage = $_POST['disabilitypercentage'];
    $address = $_POST['address'];
    $developmentaldelay = $_POST['developmentaldelay'];
    $assistance = $_POST['assistance'];

    // sql querie
    $query = "INSERT INTO specialschool (std_first_name, std_last_name, gender, age, dob, phone_number, f_m_g_name,disability_type, disability_percentage, address, developmental_delay, assistance_requires) ";
    $query .= "VALUES('$firstname','$lastname','$gender','$age','$dob','$phonenumber','$f_m_g_name','$disabilitytype','$disabilitypercentage','$address','$developmentaldelay','$assistance')";

    // passing the query to the database
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query error" . mysqli_error($connection));
    }
}
?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Teaching</h2>
            <a href="Img/specialSchool/Teaching.png" data-fancybox="img" data-title="My caption">
                <img src="Img/specialSchool/Teaching.png" alt="img1" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Gross Motor</h2>

            <a href="Img/specialSchool/GroosMotor.png" data-fancybox="img" data-title="My caption">
                <img src="Img/specialSchool/GroosMotor.png" alt="img2" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Occupational training</h2>

            <a href="Img/specialSchool/occupationalTraining.png" data-fancybox="img" data-title="My caption">
                <img src="Img/specialSchool/occupationalTraining.png" alt="img3" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Fine motor</h2>

            <a href="Img/specialSchool/fineMotor.png" data-fancybox="img" data-title="My caption">
                <img src="Img/specialSchool/fineMotor.png" alt="img4" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">occupational motor</h2>

            <a href="Img/specialSchool/occupationalMotor.png" data-fancybox="img" data-title="My caption">
                <img src="Img/specialSchool/occupationalMotor.png" alt="img5" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">Physiotherapy</h2>

            <a href="Img/specialSchool/physiotheraphy.png" data-fancybox="img" data-title="My caption">
                <img src="Img/specialSchool/physiotheraphy.png" alt="img6" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <h2 class="mb-2" style="color: #2b5876; text-decoration:underline; font-weight: bold">speech training</h2>

            <a href="Img/specialSchool/speechTraining.png" data-fancybox="img" data-title="My caption">
                <img src="Img/specialSchool/speechTraining.png" alt="img7" width="300" height="300" style="border: 2px solid black">
            </a>
        </div>
    </div>
</div>


<div class="form_heading mb-5" id="Registration">
    <h1 class="text-center form_heading_line">Registration</h1>
</div>
<!-- Form -->
<div class="container form_container bg-light p-5 mb-5">
    <form method="POST" action="specialSchool.php" id="form">
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="FirstName">Student First Name</label>
                <input type="text" class="form-control" id="FirstName" placeholder="FirstName" name="firstname" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Last Name">Student Last Name</label>
                <input type="text" class="form-control" id="LastName" placeholder="LastName" name="lastname" required>
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
        <div class="row g-3">
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
        <div class="row g-3">
            <div class="form-group">
                <label for="FatherName">Father Name/Mother Name/Guardian Name (Any one)</label>
                <input type="text" class="form-control" id="FatherName" name="f_m_g_name" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-6">
                <label for="DisabilityType">Disability Type</label>
                <input type="text" class="form-control" id="DisabilityType" placeholder="Disability Type" name="disabilitytype" required>
            </div>
            <div class="form-group col-md-6">
                <label for="DisabilityPercentage">Disability Percentage</label>
                <input type="number" class="form-control" id="DisabilityPercentage" name="disabilitypercentage" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group">
                <label for="Address">Address</label>
                <textarea type="text" class="form-control" id="Address" placeholder="Enter your Address" name="address" required></textarea>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-6">
                <label for="DevelopmentalDelay">Is the child facing some developmental delay?</label>
                <select class="form-select" id="DevelopmentalDelay" name="developmentaldelay" required>
                    <option disabled value="" selected hidden>DevelopmentalDelay</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="Assistance">Assistance required</label>
                <select class="form-select" id="Assistance" name="assistance" required>
                    <option disabled value="" selected hidden>Assistance required</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

        </div>
        <div class="formgroup d-flex justify-content-center mt-4">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary p-3">
        </div>
    </form>

</div>

<!-- Footer -->
<?php include 'includes/footer.php' ?>