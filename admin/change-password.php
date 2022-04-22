<?php
$pg = 'profile';
$title = "Change Password";
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
                                                    <h1 class="page-title text-capitalize m-0">Change Password</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Current Password<span class="text-danger">*</span>:</label>
                                                <div class="position-relative passwordWrapper">
                                                    <input type="password" class="mainInput passInput" placeholder="Enter Current Password">
                                                    <i class="fas fa-eye-slash passDisplay" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">New Password<span class="text-danger">*</span>:</label>
                                                <div class="position-relative passwordWrapper">
                                                    <input type="password" class="mainInput passInput" placeholder="Enter New Password">
                                                    <i class="fas fa-eye-slash passDisplay" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Confirm Password<span class="text-danger">*</span>:</label>
                                                <div class="position-relative passwordWrapper">
                                                    <input type="password" class="mainInput passInput" placeholder="Enter Confirm Password">
                                                    <i class="fas fa-eye-slash passDisplay" aria-hidden="true"></i>
                                                </div>
                                            </div>

                                            <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                <label for="" class="mainLabel"></label>
                                                <div class="w-100">
                                                    <a class="siteBtn" data-toggle="modal" data-target="#updatedPassword">Update</a>
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