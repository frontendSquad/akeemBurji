<?php
$pg = 'cmsManagement';
$title = "Add Job";
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
                                                    <h1 class="page-title text-capitalize m-0">Edit Jobs</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <form action="">
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Job Title<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Job Title" value="Abc Job">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Job Location<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Job Location" value="Abc Location">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-start gap60">
                                                    <label for="" class="mainLabel">Job Description<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <textarea name="" id="" rows="6" class="mainInput" placeholder="Enter Job Description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <button type="button" class="siteBtn" data-toggle="modal" data-target="#jobChanged">Save Changes</button>
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