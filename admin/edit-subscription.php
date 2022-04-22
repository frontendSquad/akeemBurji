<?php
$pg = 'subscriptionPackageManagement';
$title = "Edit Subscription Package";
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
                                                    <h1 class="page-title text-capitalize m-0">Edit Subscription Package</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-12">
                                            <div class="dashCard py-2 px-3 my-2">
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Package Name<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Package Name" value="Package 1">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Amount<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="number" class="mainInput" placeholder="Enter Price" value="$250">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Features<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 1">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 3">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 2">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <button class="siteBtn addFeature my-1"><i class="fas fa-plus-circle mr-1"></i>Add A New Feature</button>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">For Age<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Select 12 - 17 Years</option>
                                                            <option value="2" selected>Select 18+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Status<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Active</option>
                                                            <option value="2" selected>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Subscription Note (Optional):</label>
                                                    <div class="w-100">
                                                        <textarea name="" id="" rows="8" placeholder="Please Enter any Subscription Note" class="mainInput">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dashCard lightAccentBg py-2 px-3 my-2">
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Package Name<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Package Name" value="Package 1">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Amount<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="number" class="mainInput" placeholder="Enter Price" value="$250">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Features<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 1">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 3">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 2">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <button class="siteBtn addFeature my-1"><i class="fas fa-plus-circle mr-1"></i>Add A New Feature</button>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">For Age<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Select 12 - 17 Years</option>
                                                            <option value="2" selected>Select 18+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Status<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Active</option>
                                                            <option value="2" selected>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Subscription Note (Optional):</label>
                                                    <div class="w-100">
                                                        <textarea name="" id="" rows="8" placeholder="Please Enter any Subscription Note" class="mainInput">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dashCard lightAccentBg py-2 px-3 my-2">
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Package Name<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Package Name" value="Package 1">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Amount<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="number" class="mainInput" placeholder="Enter Price" value="$250">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Features<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 1">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 3">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <div class="d-flex mb-1 align-items-center">
                                                            <input type="number" class="mainInput" placeholder="Enter Feature" value="Feature No. 2">
                                                            <button class="removeButton removeFromInput d-inline-block ml-1"><i class="fas fa-trash"></i></button>
                                                        </div>
                                                        <button class="siteBtn addFeature my-1"><i class="fas fa-plus-circle mr-1"></i>Add A New Feature</button>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">For Age<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Select 12 - 17 Years</option>
                                                            <option value="2" selected>Select 18+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Status<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="1">Active</option>
                                                            <option value="2" selected>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Subscription Note (Optional):</label>
                                                    <div class="w-100">
                                                        <textarea name="" id="" rows="8" placeholder="Please Enter any Subscription Note" class="mainInput">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-sm-flex justify-content-center align-items-center text-center">
                                                <a data-toggle="modal" data-target="#updatedSubscription" class="siteBtn2 mr-1 mt-1">Save Changes</a>
                                                <a href="subscription-package-management.php" class="siteBtn mt-1">Cancel</a>
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