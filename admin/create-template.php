<?php
$pg = 'membershipCardModule';
$title = "Create Template";
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
                                            <div class="back-title">
                                                <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Create Template</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <form action="" method="POST">
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Template Name<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Template Name">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Field Title<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Title">
                                                        <div class="appendBtn">
                                                            <button class="siteBtn addTitle mt-1"><i class="fas fa-plus-circle mr-1"></i>Add A New Feature</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Type<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="s" selected hidden disabled>Select Type</option>
                                                            <option value="1">Text</option>
                                                            <option value="2">Radio</option>
                                                            <option value="3">Checkbox</option>
                                                            <option value="4">Text Area</option>
                                                            <option value="5">Dropdown</option>
                                                            <option value="6">Email</option>
                                                            <option value="7">Number</option>
                                                            <option value="8">Time</option>
                                                            <option value="9">URL</option>
                                                            <option value="10">Image</option>
                                                            <option value="11">File</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Status<span class="text-danger">*</span>:</label>
                                                    <div class="w-100 d-flex align-items-center">
                                                        <label class="switch mr-2">
                                                            <input type="checkbox" class="templateStatusBox">
                                                            <span class="slider"></span>
                                                        </label>
                                                        <span class="templateStatusText">Active</span>
                                                    </div>
                                                </div>

                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <button class="siteBtn">Create</button>
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