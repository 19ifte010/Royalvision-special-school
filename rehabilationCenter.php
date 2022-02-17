<!-- Header -->
<?php include "includes/header.php" ?>

<!-- navigation -->
<?php include "Component/nav.php" ?>

<div class="d-flex justify-content-center">
    <img src="Img/rehabilitation img new.jpeg" alt="Rehabilation Center" width="100%" class="img-fluid">
</div>

<div class="splsch">
    <div class="container mt-5 mb-5 spshcl_content">
        <h1 class="text-center spschl_text_line">REHABILITATION CENTRE</h1>
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
                                    <select class="form-select" aria-label="Default select example" id="Gender" required>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Others</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="form-group col-md-4">
                                    <label for="Age">Age</label>
                                    <input type="number" class="form-control" id="Age" required>
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
                                    <label for="Blood group">Blood Group</label>
                                    <input type="text" class="form-control" id="Blood group" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Mark Of Identification">Mark Of Identification</label>
                                    <input type="text" class="form-control" id="Mark Of Identification" required>
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
                                <div class="form-group col-md-6">
                                    <label for="FatherName">Father Name/Mother Name/Guardian Name (Any one)</label>
                                    <input type="text" class="form-control" id="FatherName" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="FatherNameOccupation">Father Name/Mother Name/Guardian occupation (Any one)</label>
                                    <input type="text" class="form-control" id="FatherNameOccupation" required>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="form-group col-md-6">
                                    <label for="FatherNameEdu">Father Name/Mother Name/Guardian education (Any one)</label>
                                    <input type="text" class="form-control" id="FatherName" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="FatherNameIncome">Father Name/Mother Name/Guardian Income (Any one)</label>
                                    <input type="text" class="form-control" id="FatherNameOccupation" required>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="form-group col-md-4">
                                    <label for="Aadhar card Number">Aadhar card Number</label>
                                    <input type="text" class="form-control" id="Aadhar card Number" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Aadhar Card" class="form-label">Aadhar Card</label>
                                    <input class="form-control" type="file" id="Aadhar Card" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Disability card" class="form-label">Disability Card</label>
                                    <input class="form-control" type="file" id="Disability card" required>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea type="text" class="form-control" id="Address" placeholder="Enter your Address" required></textarea>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="Submit" value="submit" class="btn btn-primary p-3" name="Submit">
                    </div>
                </div>

            </div>
        </div>
        <marquee class="text-danger mb-5">
            <h3>NOTE: Bring Aadhar card and VO certificate for other services to our office</h3>
        </marquee>
        <div class="servicesList">
            <div class="row">
                <div class="col-md-6">
                    <div class="services service-2">
                        <p>National ID card</p>
                    </div>
                    <div class="services service-2">
                        <p>Scribe</p>
                    </div>
                    <div class="services service-2">
                        <p>Placement Services</p>
                    </div>
                    <div class="services service-2">
                        <p>Reading and Recording</p>
                    </div>
                    <div class="services service-2">
                        <p>Braille and Audio Books</p>
                    </div>
                    <div class="services service-2">
                        <p>Legal Advocacy</p>
                    </div>
                    <div class="services service-2">
                        <p>Guidance and counciling</p>
                    </div>
                    <div class="services service-2">
                        <p>Maintenance Grants for Disabled Persons</p>
                    </div>
                    <div class="services service-2">
                        <p>Scholarships</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services service-2">
                        <p>Railway concession and Smart card</p>
                    </div>
                    <div class="services service-2">
                        <p>Bus Pass</p>
                    </div>
                    <div class="services service-2">
                        <p>Aid and Appliances</p>
                    </div>
                    <div class="services service-2">
                        <p>Physically Handicapped Pension(T.P le only)</p>
                    </div>
                    <div class="services service-2">
                        <p>Health Insurance Scheme for PWD's</p>
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
            </div>
        </div>

    </div>

</div>



<!-- Footer -->
<?php include "includes/footer.php" ?>