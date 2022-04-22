<?php
$pg = 'profile';
$title = "Edit Profile";
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
                                                    <h1 class="page-title text-capitalize m-0">Edit Profile</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1 mb-2">
                                            <div class="userIimageFrame">
                                                <img src="images/userImage.png" alt="" class="userImage img-fluid">
                                                <label for="userImage" class="uploadCamera"><i class="fas fa-camera"></i></label>
                                                <input type="file" name="" id="userImage" accept="image/*" class="d-none">
                                            </div>
                                        </div>
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Name:</label>
                                                <div class="w-100">
                                                    <input type="text" class="mainInput" placeholder="Enter Name" value="Mark">
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Email:</label>
                                                <p class="mainText">mark@email.com</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                <label for="" class="mainLabel"></label>
                                                <div class="w-100">
                                                    <a class="siteBtn" data-toggle="modal" data-target="#updatedProfile">Update</a>
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