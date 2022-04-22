<?php
$pg = 'profile';
$title = "Profile";
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
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Profile</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 text-right">
                                            <a href="change-password.php" class="siteBtn mt-1">Change Password</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1 mb-2">
                                            <div class="userIimageFrame">
                                                <img src="images/userImage.png" alt="" class="userImage img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Name:</label>
                                                <p class="mainText">Mark</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Email:</label>
                                                <p class="mainText">mark@email.com</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                <label for="" class="mainLabel"></label>
                                                <div class="w-100">
                                                    <a href="edit-profile.php" class="siteBtn">Edit Profile</a>
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