<?php
$pg = 'subscriptionPackageManagement';
$title = "Add Subscription Package";
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
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Add New Subscription Packages</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <form action="" method="POST">
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Package Name<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Package Name">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Amount<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="number" class="mainInput" placeholder="Enter Price">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Features<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <button class="siteBtn addFeature"><i class="fas fa-plus-circle mr-1"></i>Add A New Feature</button>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">For Age<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="s" selected hidden disabled>Select Age</option>
                                                            <option value="1">Select 12 - 17 Years</option>
                                                            <option value="2">Select 18+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Status<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="s" selected hidden disabled>Select</option>
                                                            <option value="1">Active</option>
                                                            <option value="2">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Subscription Note (Optional):</label>
                                                    <div class="w-100">
                                                        <textarea name="" id="" rows="8" placeholder="Please Enter any Subscription Note" class="mainInput"></textarea>
                                                    </div>
                                                </div>

                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <a data-toggle="modal" data-target="#addedSubscription" class="siteBtn2 mr-1 mb-1">Add</a>
                                                        <a href="subscription-package-management.php" class="siteBtn mb-1">Cancel</a>
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