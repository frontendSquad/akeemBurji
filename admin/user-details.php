<?php
$pg = 'userManagement';
$title = "User Details";
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
                                        <div class="col-xl-6">
                                            <div class="back-title mt-1">
                                                <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">User Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="userStatus text-right">
                                                <p class="m-0">Status:</p>
                                                <p class="statusActive"><i class="fas fa-circle green"></i>Active</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <div class="userIimageFrame mx-auto">
                                                <img src="images/userImage.png" alt="" class="userImage img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Full Name:</label>
                                                <p class="mainText">Sarah</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Email Address:</label>
                                                <p class="mainText">abc@mail.com</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Gender:</label>
                                                <p class="mainText">Male</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Age:</label>
                                                <p class="mainText">18 Years Old</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Date of Birth:</label>
                                                <p class="mainText">12/24/2003</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Marital Status:</label>
                                                <p class="mainText">Single</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Mobile No:</label>
                                                <p class="mainText">+1 101 202 303</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Country:</label>
                                                <p class="mainText">United States of America</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">City/State:</label>
                                                <p class="mainText">California</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Subscription Package:</label>
                                                <p class="mainText">Package 1</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Subscription Type:</label>
                                                <p class="mainText">Not Recurring</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Did you give your life to Jesus Christ to be your Lord and Savior?:</label>
                                                <p class="mainText">Yes</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Were you baptized by immersion?</label>
                                                <p class="mainText">No</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Are you willing to be baptized?</label>
                                                <p class="mainText">No</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Do you know your talents/gifts?</label>
                                                <p class="mainText">No</p>
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