<?php
$pg = 'newUsers';
$title = "Form Submitted By Users";
$subpg = "userRequest";
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
                                                    <h1 class="page-title text-capitalize m-0">View Request Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Full Name:<span class="text-danger">*</span></label>
                                                <p class="mainText">Jhon Doe</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Email Address:<span class="text-danger">*</span></label>
                                                <p class="mainText">info@jhondoe.com</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Phone Number:<span class="text-danger">*</span></label>
                                                <p class="mainText">123-13-45698</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">When did you receive Jesus Christ to be your Lord and Savior?:<span class="text-danger">*</span></label>
                                                <p class="mainText">Lorem Ipsum Dolor Sit Amet, Lorem Ipsum Dolor Sit Amet,</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">When would you like to be baptized?:<span class="text-danger">*</span></label>
                                                <p class="mainText">mm/dd/yyyy</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Do You Have Something Else You Want Us To Know About You?:<span class="text-danger">*</span></label>
                                                <p class="mainText">Lorem Ipsum Dolor Sit Amet, Lorem Ipsum Dolor Sit Amet,</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Honor God With A Thanksgiving
                                                    Offering(Psalm 50:23):<span class="text-danger">*</span></label>
                                                <p class="mainText">Lorem Ipsum Dolor Sit Amet, Lorem Ipsum Dolor Sit Amet,</p>
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