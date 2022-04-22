<?php
$pg = 'dashboard';
$title = "Dashboard";
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
                                                    <h1 class="page-title text-capitalize m-0">Dashboard</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard d-xl-flex align-items-center justify-content-between py-3 px-2 px-xl-3">
                                                <div class="dashCard d-flex align-items-center justify-content-between flexGrow-1 py-2 px-2 m-1">
                                                    <div class="totalContent mr-1">
                                                        <h3 class="totalLabel">Total Users</h3>
                                                        <p class="totalInfo totalUsers">100</p>
                                                    </div>
                                                    <div class="totalPie">
                                                        <img src="images/pie.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="dashCard d-flex align-items-center justify-content-between flexGrow-1 py-2 px-2 m-1">
                                                    <div class="totalContent mr-1">
                                                        <h3 class="totalLabel">Total Subscription</h3>
                                                        <p class="totalInfo totalSubs">100</p>
                                                    </div>
                                                    <div class="totalPie">
                                                        <img src="images/pie.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-lg-flex align-items-center justify-content-between">
                                                <h2 class="sectionTitle">Users</h2>
                                                <div class="form-field text-right">
                                                    <select class="dashInput" name="" id="" required="">
                                                        <option value="" selected="" hidden="" disabled="">Month</option>
                                                        <option value="">Jan</option>
                                                        <option value="">Feb</option>
                                                        <option value="">March</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="dashCard py-2 px-2 w-100">
                                                <img src="images/graph.png" alt="" class="img-fluid w-100">
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