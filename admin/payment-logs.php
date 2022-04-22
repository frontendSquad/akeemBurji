<?php
$pg = 'paymentLogs';
$title = "Payment Logs";
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
                                                    <h1 class="page-title text-capitalize m-0">Payment Logs</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="pillSpan my-3">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="sub-logs-tab" data-toggle="pill" href="#sub-logs" role="tab" aria-controls="sub-logs" aria-selected="true">Subscription Logs</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="donation-logs-tab" data-toggle="pill" href="#donation-logs" role="tab" aria-controls="donation-logs" aria-selected="false">Donation Logs</a>
                                            </li>
                                        </ul>
                                    </span>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="sub-logs" role="tabpanel" aria-labelledby="sub-logs-tab">
                                            <div class="row mb-2">
                                                <div class="col-12">
                                                    <div class="dataTables_length text-left">
                                                        <div class="user-listing-top  dashCard py-2 px-2">
                                                            <div class="d-xl-flex align-items-end justify-content-between mb-xl-1">
                                                                <div class="userInput mb-2">
                                                                    <div class="d-md-flex align-items-center">
                                                                        <label for="" class="dashLabel mb-1 mb-xl-0 mr-1">Sort By:</label>
                                                                        <div class="d-sm-flex">
                                                                            <div class="mb-1 mb-xl-0 mr-sm-1">
                                                                                <input class="dashInput p-1" type="date">
                                                                            </div>
                                                                            <div class="mb-1 mb-xl-0">
                                                                                <input class="dashInput p-1" type="date">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="userInput mb-2">
                                                                    <div class="form-field mb-1">
                                                                        <div class="d-xl-flex align-items-center justify-content-end">
                                                                            <div class="dataTables_filter">
                                                                                <div class="dashSearchWrap">
                                                                                    <form action="" method="POST">
                                                                                        <input type="search" id="search-inp" class="dashInput search-input w-100" placeholder="Search">
                                                                                        <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="d-xl-flex align-items-end flex-wrap justify-content-end mb-xl-1">
                                                                <div class="userInput mb-2">
                                                                    <label class="dashLabel d-inline-block mb-1 mb-xl-0">Filter By:</label>
                                                                    <select class="d-inline-block dashInput">
                                                                        <option value="" disabled="" hidden="" selected="">By Packages</option>
                                                                        <option value="1">Package 1</option>
                                                                        <option value="2">Package 2</option>
                                                                        <option value="3">Package 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="maain-tabble table-responsive">
                                                        <table class="table table-striped table-bordered zero-configuration">
                                                            <thead>
                                                                <tr>
                                                                    <th>S No.</th>
                                                                    <th>Full Name</th>
                                                                    <th>Payment Date</th>
                                                                    <th>Subscription Type</th>
                                                                    <th>Total Charges</th>
                                                                    <th>Recsurring</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 1</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>02</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 1</td>
                                                                    <td>$00</td>
                                                                    <td>No</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>03</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 2</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>04</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 2</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>05</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 2</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>06</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 3</td>
                                                                    <td>$00</td>
                                                                    <td>No</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mt-2">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="showing-result" id="DataTables_Table_0_info">
                                                        Showing 10 of 50 Entries
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                        <ul class="pagination justify-content-end">
                                                            <li class="paginate_button page-item previous disabled">
                                                                <a href="#" class="page-link">Previous</a>
                                                            </li>
                                                            <li class="paginate_button page-item active">
                                                                <a href="#" class="page-link">01</a>
                                                            </li>
                                                            <li class="paginate_button page-item">
                                                                <a href="#" class="page-link">02</a>
                                                            </li>
                                                            <li class="paginate_button page-item">
                                                                <a href="#" class="page-link">03</a>
                                                            </li>
                                                            <li class="paginate_button page-item next disabled" i="">
                                                                <a href="#" class="page-link">Next</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>









                                        </div>
                                        <div class="tab-pane fade" id="donation-logs" role="tabpanel" aria-labelledby="donation-logs-tab">
                                            <div class="row mb-2">
                                                <div class="col-12">
                                                    <div class="dataTables_length text-left">
                                                        <div class="user-listing-top  dashCard py-2 px-2">
                                                            <div class="d-xl-flex align-items-end justify-content-between mb-xl-1">
                                                                <div class="userInput mb-2">
                                                                    <div class="d-md-flex align-items-center">
                                                                        <label for="" class="dashLabel mb-1 mb-xl-0 mr-1">Sort By:</label>
                                                                        <div class="d-sm-flex">
                                                                            <div class="mb-1 mb-xl-0 mr-sm-1">
                                                                                <input class="dashInput p-1" type="date">
                                                                            </div>
                                                                            <div class="mb-1 mb-xl-0">
                                                                                <input class="dashInput p-1" type="date">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="userInput mb-2">
                                                                    <div class="form-field mb-1">
                                                                        <div class="d-xl-flex align-items-center justify-content-end">
                                                                            <div class="dataTables_filter">
                                                                                <div class="dashSearchWrap">
                                                                                    <form action="" method="POST">
                                                                                        <input type="search" id="search-inp" class="dashInput search-input w-100" placeholder="Search">
                                                                                        <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-xl-flex align-items-end flex-wrap justify-content-between mb-xl-1">
                                                                <div class="userInput mb-2">
                                                                    <label class="dashLabel d-inline-block mb-1 mb-xl-0">Sort By:</label>
                                                                    <select class="d-inline-block dashInput">
                                                                        <option value="" disabled="" hidden="" selected="">Sort By Type of Donation</option>
                                                                        <option value="1">Donation 1</option>
                                                                        <option value="2">Donation 2</option>
                                                                        <option value="3">Donation 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="userInput mb-2">
                                                                    <label class="dashLabel d-inline-block mb-1 mb-xl-0">Filter By Recurring:</label>
                                                                    <select class="d-inline-block dashInput">
                                                                        <option value="" disabled="" hidden="" selected="">Select</option>
                                                                        <option value="1">Yes</option>
                                                                        <option value="1">No</option>
                                                                    </select>
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

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="maain-tabble table-responsive">
                                                        <table class="table table-striped table-bordered zero-configuration">
                                                            <thead>
                                                                <tr>
                                                                    <th>S No.</th>
                                                                    <th>Full Name</th>
                                                                    <th>Payment Date</th>
                                                                    <th>Subscription Type</th>
                                                                    <th>Total Charges</th>
                                                                    <th>Recsurring</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 1</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>02</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 1</td>
                                                                    <td>$00</td>
                                                                    <td>No</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>03</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 2</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>04</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 2</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>05</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 2</td>
                                                                    <td>$00</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>06</td>
                                                                    <td>ADCF</td>
                                                                    <td>03/02/2020</td>
                                                                    <td>Package 3</td>
                                                                    <td>$00</td>
                                                                    <td>No</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mt-2">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="showing-result" id="DataTables_Table_0_info">
                                                        Showing 10 of 50 Entries
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                        <ul class="pagination justify-content-end">
                                                            <li class="paginate_button page-item previous disabled">
                                                                <a href="#" class="page-link">Previous</a>
                                                            </li>
                                                            <li class="paginate_button page-item active">
                                                                <a href="#" class="page-link">01</a>
                                                            </li>
                                                            <li class="paginate_button page-item">
                                                                <a href="#" class="page-link">02</a>
                                                            </li>
                                                            <li class="paginate_button page-item">
                                                                <a href="#" class="page-link">03</a>
                                                            </li>
                                                            <li class="paginate_button page-item next disabled" i="">
                                                                <a href="#" class="page-link">Next</a>
                                                            </li>
                                                        </ul>
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