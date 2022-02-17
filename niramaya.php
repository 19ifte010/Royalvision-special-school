<!-- Header -->
<?php include "includes/header.php" ?>

<!-- Navigation -->
<?php include "Component/nav.php" ?>

<div class="d-flex justify-content-center mb-5">
    <img src="Img/niramaya new.jpg" alt="Special Welfare Program" width="100%" class="img-fluid">
</div>

<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">NIRAMAYA</h1>
    </div>
</div>

<div class="niramayaContent container mb-5">
    <p>Insurance scheme for intellectual disability, autism, cerebral palsy and multiple disability is being implemented under the National Trust Act 1999. Niramaya insurance scheme is a unique multipurpose for intellectual disability for the above mention differently abled. Royalvision is the implementing agency for this project in Madurai district</p>
</div>
<div class="form_heading mb-5">
    <h1 class="text-center form_heading_line">Registration</h1>
</div>

<div class="container form_container bg-light p-5 mb-5">
    <form>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="FirstName">Student First Name</label>
                <input type="text" class="form-control" id="FirstName" placeholder="FirstName" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Last Name">Student Last Name</label>
                <input type="text" class="form-control" id="LastName" placeholder="LastName" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Gender">Gender</label>
                <select class="form-select" aria-label="Default select example" id="Gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>

                </select>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="DOB">DOB</label>
                <input type="date" class="form-control" id="DOB" required>
            </div>
            <div class="form-group col-md-4">
                <label for="PhoneNumber">PhoneNumber</label>
                <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Marital Status">Marital status</label>
                <select class="form-select" id="Marital status" required>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                </select>
            </div>

        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="FatherName" style="font-size: 13px;">Father Name/Mother Name/Guardian Name (Any one)</label>
                <input type="text" class="form-control" id="FatherName">
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Relation">Guardian Relation</label>
                <input type="text" class="form-control" id="Guardian Relation" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Nominee">Nominee</label>
                <input type="text" class="form-control" id="Nominee"  required>
            </div>
        </div>

        <div class="row g-3">
            <div class="form-group col-md-4">
            <label for="BPL">BPL</label>
                <select class="form-select" id="BPL">
                    <option value="None">--None--</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

            </div>
            <div class="form-group col-md-8">
                <label for="Address">Address</label>
                <textarea type="text" class="form-control" id="Address" placeholder="Enter your Address" required></textarea>
            </div>
        </div>
        <div class="formgroup d-flex justify-content-center mt-4">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary p-3">
        </div>
    </form>

</div>

<!-- Footer -->
<?php include "includes/footer.php" ?>