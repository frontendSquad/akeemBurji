<?php
$pg = 'audioManagement';
$title = "Add Video";
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
                                                    <h1 class="page-title text-capitalize m-0">Add New Video</h1>
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
                                                        <input type="text" class="mainInput" placeholder="Enter Video Track Title">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Select Type<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Type">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Amount<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="number" class="mainInput" placeholder="Enter Amount">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Upload Track<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <label for="uploadVideo" class="imageAction">
                                                            <i class="fas fa-upload"></i>
                                                        </label>
                                                        <input type="file" name="" id="uploadVideo" class="d-none">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <button type="button" data-toggle="modal" data-target="#addVideo" class="siteBtn mb-1">Add Media</button>
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