<?php
$pg = 'subscriptionPackageManagement';
$title = "Subscription Package Management";
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
                                                    <h1 class="page-title text-capitalize m-0">Subscription Package Management</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="dataTables_length text-left">
                                                <div class="user-listing-top dashCard py-2 px-2">
                                                    <div class="d-xl-flex align-items-end justify-content-between mb-xl-1">
                                                        <div class="userInput mb-2">
                                                            <label class="dashLabel d-inline-block mb-1 mb-xl-0">Package Status:</label>
                                                            <select class="d-inline-block dashInput">
                                                                <option value="" disabled="" hidden="" selected="">Select</option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Inctive</option>
                                                            </select>
                                                        </div>
                                                        <div class="userInput mb-2">
                                                            <a href="add-subscription.php" class="siteBtn">Add New Subscription</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-xl-flex align-items-end flex-wrap justify-content-between mb-xl-1">
                                                        <div class="userInput mb-2">
                                                            <label class="dashLabel d-inline-block mb-1 mb-xl-0 mr-1">Show</label>
                                                            <select class="d-inline-block dashInput sm-dropdown">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                            <label class="dashLabel d-inline-block mb-1 mb-xl-0 ml-1">Entries</label>
                                                        </div>
                                                        <div class="userInput mb-2">
                                                            <label class="dashLabel d-inline-block mb-1 mb-xl-0">Sort By:</label>
                                                            <select class="d-inline-block dashInput">
                                                                <option value="1">By Age</option>
                                                                <option value="2">By Amount</option>
                                                                <option value="3">By Gender</option>
                                                                <option value="4">By City</option>
                                                                <option value="5">By State/Province</option>
                                                                <option value="6">By Country</option>
                                                                <option value="7">By Continent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-1 mb-3">
                                        <div class="col-12">
                                            <h1 class="sub-title text-capitalize m-0">View Packages</h1>
                                        </div>
                                        <div class="col-12">
                                            <div class="dashCard py-2 px-3 my-2">
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Package Name:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Package 1</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Amount:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">$1000</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Features:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Feature No.1</p>
                                                        <p class="mainText">Feature No.2</p>
                                                        <p class="mainText">Feature No.3</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">For Age:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">12 Years - 17 Years</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Status:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Active</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Subscription Note:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <a href="edit-subscription.php" class="siteBtn">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dashCard lightAccentBg py-2 px-3 my-2">
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Package Name:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Package 2</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Amount:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">$1000</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Features:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Feature No.1</p>
                                                        <p class="mainText">Feature No.2</p>
                                                        <p class="mainText">Feature No.3</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">For Age:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">18+ Years</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Status:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Active</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Subscription Note:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <a href="edit-subscription.php" class="siteBtn">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dashCard lightAccentBg py-2 px-3 my-2">
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Package Name:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Package 3</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Amount:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">$1000</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Features:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Feature No.1</p>
                                                        <p class="mainText">Feature No.2</p>
                                                        <p class="mainText">Feature No.3</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Status:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Active</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">Subscription Note:</label>
                                                    <div class="w-100">
                                                        <p class="mainText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin</p>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <a href="edit-subscription.php" class="siteBtn">Edit</a>
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