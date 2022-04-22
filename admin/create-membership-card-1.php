<?php
$pg = 'membershipCardModule';
$title = "Create Membership Card";
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
                                            <div class="back-title">
                                                <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Create Membership Cards</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Select Template<span class="text-danger">*</span>:</label>
                                                <div class="w-100">
                                                    <select name="" id="" class="mainInput">
                                                        <option value="s" selected hidden disabled>Select Tempelate</option>
                                                        <option value="1">Template ABC</option>
                                                        <option value="2">Template ABC</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel"></label>
                                                <div class="w-100">
                                                    <button class="siteBtn">Next</button>
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