<?php
$pg = 'cmsManagement';
$title = "Add Service CMS";
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
                                                    <h1 class="page-title text-capitalize m-0">Add Services</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 text-right">
                                            <a href="add-cms-service.php" class="siteBtn mt-1 mr-1">Add A New Service</a>
                                            <a class="siteBtn mt-1">Update</a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 mb-2">
                                            <div class="fullImage">
                                                <img src="images/eventImage.png" alt="" class="img-fluid w-100">
                                                <div class="fullImageAction">
                                                    <label for="editEventImg" class="fullImageActionBtn"><i class="fas fa-upload"></i></label>
                                                    <input type="file" name="" id="editEventImg" class="d-none" accept="image/*">
                                                    <button class="fullImageActionBtn"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Name<span class="text-danger">*</span>:</label>
                                                <div class="w-100">
                                                    <input type="text" class="mainInput" placeholder="Enter Service Name">
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Description<span class="text-danger">*</span>:</label>
                                                <div class="w-100">
                                                    <textarea name="" id="" rows="8" placeholder="Enter Description of Service" class="mainInput"></textarea>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel"></label>
                                                <div class="w-100">
                                                    <a class="siteBtn" data-toggle="modal" data-target="#addedCmsService">Add</a>
                                                </div>
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