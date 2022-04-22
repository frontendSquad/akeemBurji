<?php
$pg = 'userManagement';
$title = "Add User";
include('header.php');
include('sidebar.php');
?>

<div class="app-content content dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="back-title mt-1">
                                                <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Add a New User</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <span class="pillSpan">
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-user-tab" data-toggle="pill" href="#pills-user" role="tab" aria-controls="pills-user">User</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-organization-tab" data-toggle="pill" href="#pills-organization" role="tab" aria-controls="pills-organization">Organization</a>
                                                    </li>
                                                </ul>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-9 col-lg-11 offset-xl-1">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                                                    <form action="" method="POST">
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Full Name<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Full Name">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Email<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="email" class="mainInput" placeholder="Enter Email">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Age<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <select name="" id="" class="mainInput">
                                                                    <option value="1" selected hidden disabled>Select Age</option>
                                                                    <option value="2">12 - 17 Years</option>
                                                                    <option value="3">18 Years or Above</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Gender<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <div class="d-flex align-baseline">
                                                                    <div class="radioButton mr-2">
                                                                        <input type="radio" class="" id="male" name="gender">
                                                                        <label class="text-uppercase" for="male">Male</label>
                                                                    </div>
                                                                    <div class="radioButton">
                                                                        <input type="radio" class="" id="female" name="gender">
                                                                        <label class="text-uppercase" for="female">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">JCGN Local Churches<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <select name="" id="" class="mainInput">
                                                                    <option value="s" selected hidden disabled>Select Church</option>
                                                                    <option value="1">Church 1</option>
                                                                    <option value="2">Church 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Parent/Guardian Name<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Parent/Guardian Name">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Parent/Guardian No<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="number" class="mainInput" placeholder="Enter Parent/Guardian No">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Parent/Guardian Email<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="email" class="mainInput" placeholder="Enter Parent/Guardian Email">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Parents/Guardian?<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <div class="d-flex align-baseline">
                                                                    <div class="radioButton mr-2">
                                                                        <input type="radio" class="" id="male" name="gender">
                                                                        <label class="text-uppercase" for="male">Male</label>
                                                                    </div>
                                                                    <div class="radioButton">
                                                                        <input type="radio" class="" id="female" name="gender">
                                                                        <label class="text-uppercase" for="female">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Occupation<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Your Occupation">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Date of Birth<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="date" class="mainInput">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Phone No<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="number" class="mainInput" placeholder="Enter Phone">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Home Address<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Home Address">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Select Country<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <select name="" id="" class="mainInput">
                                                                    <option value="s" selected hidden disabled>Select Country</option>
                                                                    <option value="1">Country 1</option>
                                                                    <option value="2">Country 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Select City or State<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <select name="" id="" class="mainInput">
                                                                    <option value="s" selected hidden disabled>Select City or State</option>
                                                                    <option value="1">City 1</option>
                                                                    <option value="2">City 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel"></label>
                                                            <div class="w-100">
                                                                <button type="button" class="siteBtn" data-toggle="modal" data-target="#createdUser">Create</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="pills-organization" role="tabpanel" aria-labelledby="pills-organization-tab">
                                                    <form action="" method="POST">
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Organization Name<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Organization Name">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Organization Email<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="email" class="mainInput" placeholder="Enter Email">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Profit/Non-Profit<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <select name="" id="" class="mainInput">
                                                                    <option value="s" selected hidden disabled>Select Type</option>
                                                                    <option value="1">Profit</option>
                                                                    <option value="2">Non-Profit</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">JCGN Local Churches<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <select name="" id="" class="mainInput">
                                                                    <option value="s" selected hidden disabled>Select Church</option>
                                                                    <option value="1">Church 1</option>
                                                                    <option value="2">Church 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Years In Business<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="number" class="mainInput" placeholder="Enter Years In Business">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Started In<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="date" class="mainInput">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Owned, Affiliated etc<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Owned, Affiliated etc">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Organization Email<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="email" class="mainInput" placeholder="Enter Organization Email">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Organization Street Address<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Organization Street Address">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Service to provide to JCGN<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Service to provide to JCGN">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Full Name of the Person to contact<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Full Name of the Person to contact">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Title (CEO, President, Manager,Etc<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Title">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Organization/Company Mission<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="text" class="mainInput" placeholder="Enter Organization/Company Mission">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Select Country<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <select name="" id="" class="mainInput">
                                                                    <option value="s" selected hidden disabled>Select Country</option>
                                                                    <option value="1">Country 1</option>
                                                                    <option value="2">Country 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Create Password<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="password" class="mainInput" placeholder="Enter Password">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel">Confirm Password<span class="text-danger">*</span>:</label>
                                                            <div class="w-100">
                                                                <input type="password" class="mainInput" placeholder="Confirm Password">
                                                            </div>
                                                        </div>
                                                        <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                            <label for="" class="mainLabel"></label>
                                                            <div class="w-100">
                                                                <button type="button" class="siteBtn" data-toggle="modal" data-target="#createdUser">Create</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include('footer.php') ?>