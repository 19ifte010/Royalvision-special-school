<!-- Header -->
<?php include "includes/header.php" ?>

<!-- Navigation -->
<?php include "Component/nav.php" ?>

<div class="d-flex justify-content-center mb-5">
    <img src="Img/llclg.jpeg" alt="Special Welfare Program" width="100%" class="img-fluid">
</div>
<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">LLC(Local Level Committee) and LG(Legal Guardianship)</h1>
    </div>
</div>

<div class="llclgContent container mb-5">
    <ul class="list-group list-group-numbered">
        <li class="list-group-item p-3">Royalvision operates on a local level committee set up under the National Trust Act 1999.our organization is on NGO member of this group of 4 people headed by the District collector</li>
        <li class="list-group-item p-3">We are in the process of appointing a legal guardian for intellectual disability, autism, cerebral palsy and multiple disability classified under the National Trust Act 1999</li>
        <li class="list-group-item p-3">Applications received online for the above persons will be personally reviewed by the staff member of our organization and it is recommended to the District collector to issue guardianship certificates.</li>
        <li class="list-group-item p-3">Under the scheme currently we are working in Madurai and Thoothukudi districts a local level committees headed by the District collector respective districts</li>
    </ul>
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
                <label for="Email">Email id</label>
                <input type="text" class="form-control" id="Email" required>
            </div>
            <div class="form-group col-md-4">
                <label for="DOB">DOB</label>
                <input type="date" class="form-control" id="DOB" required>
            </div>
            <div class="form-group col-md-4">
                <label for="PhoneNumber">PhoneNumber</label>
                <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="FatherName" style="font-size: 13px;">Father Name/Mother Name/Guardian Name (Any one)</label>
                <input type="text" class="form-control" id="FatherName">
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Witness">Guardian Witness</label>
                <input type="text" class="form-control" id="Guardian Witness">

            </div>
            <div class="form-group col-md-4">
                <label for="Witness">Witness</label>
                <input type="text" class="form-control" id="Witness">
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Aadhar Card" class="form-label">Aadhar Card</label>
                <input class="form-control" type="file" id="Aadhar Card" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Medical Certificate" class="form-label">Medical Certificate</label>
                <input class="form-control" type="file" id="Medical Certificate" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Consent Certificate" class="form-label">Consent Certificate</label>
                <input class="form-control" type="file" id="Consent Certificate" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Guardian Photo" class="form-label">Guardian Photo</label>
                <input class="form-control" type="file" id="Guardian Photo" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Combined Photo" class="form-label">Combined Photo</label>
                <input class="form-control" type="file" id="Combined Photo" required>
            </div>
            <div class="form-group col-md-4">
                <label for="PWD Photo" class="form-label">PWD Photo</label>
                <input class="form-control" type="file" id="PWD Photo" required>
            </div>
        </div>

        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Guardian Aadhar Number">Guardian Aadhar Number</label>
                <input type="text" class="form-control" id="Guardian Aadhar Number" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Phone Number">Guardian Phone Number</label>
                <input type="text" class="form-control" id="Guardian Phone Number" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Guardian Mail id">Guardian Mail id</label>
                <input type="email" class="form-control" id="Guardian Mail id" required>
            </div>
        </div>

        <div class="row g-3">
            <div class="form-group col-md-4">
                <label for="Marital Status">Marital status</label>
                <select class="form-select" id="Marital status" required>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="Disability Type">Disability Type</label>
                <input type="text" class="form-control" id="Disability Type" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Disability card" class="form-label">Disability Card</label>
                <input class="form-control" type="file" id="Disability card" required>
            </div>
        </div>

        <div class="row g-3">

        </div>

        <div class="row g-3">
            <div class="form-group">
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