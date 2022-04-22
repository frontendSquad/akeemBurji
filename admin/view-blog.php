<?php
$pg = 'cmsManagement';
$title = "View Blog";
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
                                                    <h1 class="page-title text-capitalize m-0">Blogs</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 mb-2">
                                            <div class="fullImage">
                                                <img src="images/eventImage.png" alt="" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Blog Title<span class="text-danger">*</span>:</label>
                                                <div class="w-100">
                                                    <p class="mainText">Abc Blog</p>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Posted On<span class="text-danger">*</span>:</label>
                                                <div class="w-100">
                                                    <p class="mainText">mm/dd/yyyy</p>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Job Description<span class="text-danger">*</span>:</label>
                                                <div class="w-100">
                                                    <p class="mainText">Lorem ipsum dolor sit amet, consectetur adi piscing elit. Aenean euismod bibendum lao Aenean euismod bibendum laoreet. </p>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel"></label>
                                                <a href="edit-blog.php" class="siteBtn">Edit</a>
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