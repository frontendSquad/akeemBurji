<?php
$pg = 'videoManagement';
$title = "Edit Video";
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
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="back-title mt-1">
                                                <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Edit Video</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <form action="video-management.php" method="POST">
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Video Track Title<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Video Track Title" value="abc video">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Select Type<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Type" value="Paid">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Amount<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="number" class="mainInput" placeholder="Enter Amount" value="123">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-start gap60">
                                                    <label for="" class="mainLabel">Upload Video<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <div class="mediaBox">
                                                            <div class="mediaView">
                                                                <img src="images/images.png" alt="" class="img-fluid">
                                                                <button type="button" class="notBtn deleteBtn"><i class="fas fa-trash"></i></button>
                                                            </div>
                                                            <label for="uploadVideo" class="imageAction d-none">
                                                                <i class="fas fa-upload"></i>
                                                            </label>
                                                        </div>
                                                        <input type="file" name="" id="uploadVideo" class="d-none">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <button type="button" data-toggle="modal" data-target="#editVideo" class="siteBtn mb-1">Update</button>
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