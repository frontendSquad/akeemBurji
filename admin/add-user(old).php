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
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <form action="" method="POST">
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Please select User Type<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Registered User</option>
                                                            <option value="2">Minister</option>
                                                            <option value="3">Staff</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Please select User Type<span class="text-danger">*</span>:</label>
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
                                                    <label for="" class="mainLabel">Select Marital Status<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Select Marital Status</option>
                                                            <option value="2">Single</option>
                                                            <option value="3">Married</option>
                                                            <option value="3">Divorced</option>
                                                            <option value="3">Seperated</option>
                                                            <option value="3">Committed</option>
                                                            <option value="3">Widowed</option>
                                                            <option value="3">Engaged</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Select Country<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1" selected hidden disabled>Select Country</option>
                                                            <option value="2">Country 1</option>
                                                            <option value="3">Country 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Select City or State<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1" selected hidden disabled>Select City or State</option>
                                                            <option value="2">City or State 1</option>
                                                            <option value="3">City or State 2</option>
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
                                                    <label for="" class="mainLabel">Any Package He/she is subscribing: (Optional):</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1" selected hidden disabled>Select Package</option>
                                                            <option value="2">Package 1</option>
                                                            <option value="3">Package 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <a data-toggle="modal" data-target="#addUser" class="siteBtn">Create</a>
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
            </section>
        </div>
    </div>
</div>

<?php include('footer.php') ?>